<?php
	class article
	{
		public $id;
		public $title;
		public $imageFile;
		public $authors;

		function __construct($title, $imageFile, $authors) 
		{
			$this->title = $title;
			$this->imageFile = $imageFile;
			$this->authors = $authors;
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

		function __construct($year, $imageFile) 
		{
			$this->year = $year;
			$this->imageFile = $imageFile;
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

			$conn = new mysqli($this->hostname, 
				$this->username , $this->password, $this->database);
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
			self::$sql = new sql("10.31.6.3", "anthologyAdmin", "admin", "anthology");
		}

		public static function getIssue($issueYear) 
		{
			$query = "
				SELECT issueYear,
				       imageFile
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
			return new issue($year, $imageFile);
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
				       imageFile,
				       firstName,
				       lastName
				  FROM articles,
				       authorarticle,
				       authors
				 WHERE articles.articleID = $id
				   AND authorarticle.articleID = articles.articleID
				   AND authors.authorID = authorarticle.authorID;
			";
			$data = self::$sql->query($query);
			if (count($data) == 0) return null;
			$assoc = $data[0];
			$title = $assoc['title'];
			$imageFile = $assoc['imageFile'];
			$authors = array($assoc['firstName'] . ' ' . $assoc['lastName']);
			for ($i = 1; $i < count($data); $i++) 
			{
				$assoc = $data[$i];
				$authors[$i] = $assoc['firstName'] . ' ' . $assoc['lastName'];
			}
			return new article($title, $imageFile, $authors);
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
				$contents[$id] = new article($title, $imageFile, $authors);
				$contents[$id]->id = $id;
			}
			return $contents;
		}
	} 
	data::init(); 
?>