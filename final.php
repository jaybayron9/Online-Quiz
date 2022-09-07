<?php 

include("db.php");
session_start();

?>

<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/fina.css">

<body>
	<div class="container">
		<?php 
			$score = $_SESSION['score'];
			
			echo '
				<p>Congratulations!<br><br>You have succesfully completed this quiz.<br><br></p>
				<p>Your score:<br><br> '.$score.'</p><br>
				';

			$query = "UPDATE user SET scores = '$score' WHERE id = (SELECT MAX(id) FROM user)";
			$result=mysqli_query($connection,$query);

			unset($_SESSION['score']); 
		?>
		<a class="restart" href="profile.php">New User</a>
		<a class="exit" href="index.php">Exit</a>
	</div>
</body>

