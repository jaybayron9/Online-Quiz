<?php 

include 'db.php';
session_start();

$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));

?>

<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/main.css">

<body>
	<main>
		<h2>Test Your PHP Knowledge</h2><br>
		<p>This is a multiple choice quiz to test your PHP Knowledge.</p>
		
		<li>Number of Questions: <?php echo $total_questions; ?> </li>
		<li>Type: Multiple Choice</li><br><br>

		<a class="button" href="question.php?n=1" class="start">Start Quiz</a>
	</main>
</body>
