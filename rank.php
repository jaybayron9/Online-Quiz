<!DOCTYPE html>
<html>
<head  lang="en" dir="ltr">
	<meta charset="utf-8">
	<title>Rank | PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
	<style>
		body {
			 	background: #34495e;
			}

		table {
			padding: 40px;
			position: absolute;
			top: 140px;
			left: 50%;
			transform: translate(-50%);
			font-family: 'Source Code Pro', monospace;
			color: #2ecc71;
			font-size: 20px;
			border-collapse: collapse;
			width: 80%;
		}

		td, th {
			border: 1px solid #0D0D0D;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(odd) {
			background-color: #0D0D0D;
		}
	</style>
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
	<table>
		<tr>
			<th><center>Rank</center></th>
			<th><center>User</center></th>
			<th><center>Age</center></th>
			<th><center>Gender</center></th>
			<th><center>Work</center></th>
			<th><center>School Attended</center></th>
			<th><center>Scores</center></th>	
		</tr>
			<?php  

			include("db.php");

			$query = "SELECT id,username, age, gender, work, school_attended, scores FROM user ORDER BY scores DESC";
			$result = mysqli_query($connection,$query);

			$id = 1;
			if ($result-> num_rows > 0) 
				{
					while ($row = $result-> fetch_assoc()) 
						{
							echo "<tr><td><center>".$id++.
							"</center></td><td><center>".$row['username'].
							"</center></td><td><center>".$row['age'].
							"</center></td><td><center>".$row['gender'].
							"</center></td><td><center>".$row['work'].
							"</center></td><td><center>".$row['school_attended'].
							"</center></td><td><center>".$row['scores']."</center></td></tr>";
						}
					echo "</table>";
				} 
			else 
				{ 
					echo " "; 
				}
					
			$connection-> close();

			?>
</body>
</html>