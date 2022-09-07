<?php 

include 'db.php';
session_start(); 
//Set Question Number
$number = $_GET['n'];

//Query for the Question
$query = "SELECT * FROM questions WHERE question_number = $number";

// Get the question
$result = mysqli_query($connection,$query);
$question = mysqli_fetch_assoc($result); 

//Get Choices
$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($connection,$query);
// Get Total questions
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
?>

<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/question.css">

<body>
	<div class="container">
		<p class="total">Question <?php echo $number; ?> of <?php echo $total_questions; ?></p>
		<p class="question"><?php echo $question['question_text']; ?></p>

		<form method="POST" action="process.php">
			<?php while($row=mysqli_fetch_assoc($choices))
						{ ?>
				<li class="choices">
					<input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo ' '. $row['coption']; ?>
				</li>
				<?php } ?>
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<div class="submit">
					<input class="btn1" type="submit"  name="back" value="Back">
					<input class="btn1" type="submit"  name="submit" value="Next">
				</div>
		</form>
	</div>
</body>