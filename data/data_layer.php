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

	function query($query) 
	{
		$conn = new mysqli("localhost", "root" , "", "anthology");
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

	function getIssue($issueYear) 
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
		$data = query($query);
		if (count($data) != 1) return null;
		$assoc = $data[0];
		$year = $assoc['issueYear'];
		$imageFile = $assoc['imageFile'];
		return new issue($year, $imageFile);
	}

	function getIssues()
	{
		$query = "
			SELECT issueYear
		 	  FROM issues;
		";
		$data = query($query);
		$issues = array();
		for($i = 0; $i < count($data); $i++) 
		{
			array_push($issues, $data[$i]['issueYear']);
		}
		return $issues;
	}

	function getArticle($id) 
	{
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
		$data = query($query);
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

	function getContents($year) 
	{
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
		$data = query($query);
		$contents = array();
		$count = count($data);
		for ($i = 0; $i < $count; $i) 
		{
			$assoc = $data[$i];
			$id = $assoc['articleID'];
			$title = $assoc['title'];
			$authors = array();
			do {
				$name = $assoc['firstName'] . ' ' . $assoc['lastName'];
				array_push($authors, $name);
				if (++$i >= $count) break;
				$assoc = $data[$i];
				$nextID = $assoc['articleID'];
			}
			while ($nextID == $id);
			$contents[$id] = new article($title, null, $authors);
		}
		return $contents;
	}
?>