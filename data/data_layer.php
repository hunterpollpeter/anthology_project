<?php
	class article
	{
		public $id;
		public $title;
		public $imageFile;
		public $authors;
		public $start;
		public $end;
		public $issueFile;
		public $year;

		function __construct($title, $imageFile, $authors, $start, $end, $issueFile, $year) 
		{
			$this->title = $title;
			$this->imageFile = $imageFile;
			$this->authors = $authors;
			$this->start = $start;
			$this->end = $end;
			$this->issueFile = $issueFile;
			$this->year = $year;
		}

		function getAuthorString()
		{
			$count = count($this->authors);
			$authorString = "";
			for ($i = 0; $i < $count; $i++) {
				$authorString .= $this->authors[$i];
				if ($i == $count - 2) {
					$authorString .= " &amp; ";
				}
				elseif ($i < $count - 1) {
					$authorString .= ", ";
				}
			}
			return $authorString;
		}
	}

	class issue
	{
		public $year;
		public $imageFile;
		public $issueFile;
		public $noteStart;
		public $noteEnd;

		function __construct($year, $imageFile, $issueFile, $noteStart, $noteEnd) 
		{
			$this->year = $year;
			$this->imageFile = $imageFile;
			$this->issueFile = $issueFile;
			$this->noteStart = $noteStart;
			$this->noteEnd = $noteEnd;
		}
	}

	class sql
	{
		private $hostname;
		private $username;
		private $password;
		private $database;

		function __construct($hostname, $username, $password, $database) 
		{
			$this->hostname = $hostname;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}

		public function query($query) 
		{
			// if (is_array($query)) return multiQuery($query);

			$conn = new mysqli($this->hostname, $this->username , $this->password, $this->database);
			$conn->query('SET NAMES utf8');
			$result = $conn->query($query);
			if(!$result) die ($conn->error);
			$data = array();
			for ($i = 0; $i < $result->num_rows; $i++) 
			{
				$result->data_seek($i);
				$assoc = $result->fetch_assoc();
				array_push($data, $assoc);
			}
			$result->close();
			$conn->close();
			return $data;
		}

		// private function multiQuery($queries) 
		// {
		// 	$datas = array();
		// 	for ($i = 0; $i < count($queries); $i++) 
		// 	{
		// 		$datas[$i] = query($queries[$i]);
		// 	}
		// 	return $datas;
		// }
	}

	class data 
	{
		private static $sql;

		public static function init()
		{
			// self::$sql = new sql("10.31.6.3", "anthologyAdmin", "admin", "anthology2");
			self::$sql = new sql("localhost", "root", "", "anthology2");
		}

		public static function getIssue($issueYear) 
		{
			$query = "
				SELECT issueYear,
				       imageFile,
				       issueFile,
				       noteStart,
					   noteEnd
			 	  FROM issues
			 	 WHERE 
			";
			if ($issueYear == null) 
			{
				$query .= "currentIndicator = 1";
			}
			else {
				$query .= "issueYear = $issueYear";
			}
			$data = self::$sql->query($query);
			if (count($data) != 1) return null;
			$assoc = $data[0];
			$year = $assoc['issueYear'];
			$imageFile = $assoc['imageFile'];
			$issueFile = $assoc['issueFile'];
			$noteStart = $assoc['noteStart'];
			$noteEnd = $assoc['noteEnd'];
			return new issue($year, $imageFile, $issueFile, $noteStart, $noteEnd);
		}

		public static function getArchivedIssues()
		{
			$query = "
				SELECT issueYear
			 	  FROM issues
			 	 WHERE currentIndicator = 0
			 	 ORDER BY issueYear DESC;
			";
			$data = self::$sql->query($query);
			$issues = array();
			for($i = 0; $i < count($data); $i++) 
			{
				array_push($issues, $data[$i]['issueYear']);
			}
			return $issues;
		}

		public static function getArticle($id) 
		{
			if (!is_numeric($id)) return;
			$query = "
				SELECT title,
				       start,
				       end,
					   articles.imageFile,
					   firstName,
					   lastName,
				       articles.issueYear,
				       issueFile
				  FROM articles,
					   authorarticle,
					   authors,
				       issues
				 WHERE articles.articleID = $id
				   AND authorarticle.articleID = articles.articleID
				   AND authors.authorID = authorarticle.authorID
				   AND issues.issueYear = articles.issueYear;
			";
			$data = self::$sql->query($query);
			if (count($data) == 0) return null;
			$assoc = $data[0];
			$title = $assoc['title'];
			$imageFile = $assoc['imageFile'];
			$start = $assoc['start'];
			$end = $assoc['end'];
			$issueFile = $assoc['issueFile'];
			$year = $assoc['issueYear'];
			$authors = array($assoc['firstName'] . ' ' . $assoc['lastName']);
			for ($i = 1; $i < count($data); $i++) 
			{
				$assoc = $data[$i];
				$authors[$i] = $assoc['firstName'] . ' ' . $assoc['lastName'];
			}
			return new article($title, $imageFile, $authors, $start, $end, $issueFile, $year);
		}

		public static function getContents($year) 
		{
			if (!is_numeric($year)) return;
			$query = "
				SELECT articles.articleID,
					   title, 
				       imageFile,
				       firstName,
				       lastName
				  FROM articles,
				       authorarticle,
				       authors
				 WHERE articles.issueYear = $year
				   AND authorarticle.articleID = articles.articleID
				   AND authors.authorID = authorarticle.authorID;
			";
			$data = self::$sql->query($query);
			$contents = array();
			$count = count($data);
			$i = 0;
			while ($i < $count) 
			{
				$assoc = $data[$i];
				$id = $assoc['articleID'];
				$title = $assoc['title'];
				$imageFile = $assoc['imageFile'];
				$authors = array();
				do {
					$name = $assoc['firstName'] . ' ' . $assoc['lastName'];
					array_push($authors, $name);
					if (++$i >= $count) break;
					$assoc = $data[$i];
					$nextID = $assoc['articleID'];
				}
				while ($nextID == $id);
				$contents[$id] = new article($title, $imageFile, $authors, null, null, null, $year);
				$contents[$id]->id = $id;
			}
			return $contents;
		}
	} 
	data::init(); 
?>