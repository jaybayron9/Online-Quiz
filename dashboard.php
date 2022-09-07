<?php

// Always run this function to access the $_SESSION superglobal
session_start();

if (isset($_SESSION["logged_in"]) and $_SESSION["logged_in"] == true) 
	{ ?>

<!DOCTYPE html>
<html>
<head  lang="en" dir="ltr">
	<meta charset="utf-8">
	<title>Admin | PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>
<header>
	<a href="dashboard.php"><h1>PHP<span>Quizer</span></h1></a>
	<nav>
		<ul>
			<li><a class="b1" href="dashboard.php">Home</a></li>
			<li><a class="b1" href="logout.php">Log Out</a></li>
		</ul>
	</nav>
</header>
<body>
	<div class="box">
		<div>
			<a class="btn1" href="add.php">Add Question</a>
		</div>
		<div>
			<a class="btn1" href="rank.php">Rank</a>
		</div>
	</div>
</body>
</html>

<?php } 
else 
	{ 
	    // Initialize log-in status
	    $_SESSION["logged_in"] = false;
	}
?>