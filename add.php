<?php  

include 'db.php';

// If the submit is cliked then execute this 
if(isset($_POST['submit']))
	{
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_choice'];

		// Choice Array
		$choice = array();
		$choice[1] = $_POST['choice1'];
		$choice[2] = $_POST['choice2'];
		$choice[3] = $_POST['choice3'];
		$choice[4] = $_POST['choice4'];
		$choice[5] = $_POST['choice5'];

	 // First Query for Questions Table
		$query = "INSERT INTO questions (question_number, question_text)
				VALUES ('{$question_number}','{$question_text}')";

		$result = mysqli_query($connection,$query);
		
		//Validate First Query
		if($result)
			{
				foreach($choice as $option => $value)
					{
						if($value != "")
							{
								if($correct_choice == $option)
									{
										$is_correct = 1;
									}
								else
									{
										$is_correct = 0;
									}

								//Second Query for Choices Table
								$query = "INSERT INTO options (question_number,is_correct,coption) 
										VALUES ('{$question_number}','{$is_correct}','{$value}')";

								$insert_row = mysqli_query($connection,$query);
								// Validate Insertion of Choices

								if($insert_row)
								{
									continue;
								}
								else
									{
									die("2nd Query for Choices could not be executed" . $query);
								}
							}
					}
			}
		$message = "Question has been added successfully";
	}

// Add 1 to the total number of rows every time to add question
$query = "SELECT * FROM questions";
$questions = mysqli_query($connection,$query);
$total = mysqli_num_rows($questions);
$next = $total+1;
			
?>

<!DOCTYPE html>
<html>
<head  lang="en" dir="ltr">
	<meta charset="utf-8">
	<title>Add Questions | PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/add.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>
<header>
	<a href="dashboard.php"><h1>PHP<span>Quizer</span></h1></a>
	<nav>
		<ul>
			<li><a class="b1" href="dashboard.php">Home</a></li>
			<li><a class="b1" href="index.php">Log Out</a></li>
		</ul>
	</nav>
</header>
<body>	
	<div class="container">
		<center><h2>Add A Question</h2></center><br>
		<?php

		if(isset($message))
				{
					echo "<h4>" . $message . "</h4>";
				} 

		?>
						
		<form method="POST" action="add.php">
				<p>
					<label>Question Number:</label>
					<input type="number" name="question_number" value="<?php echo $next;  ?>">
				</p>
				<p>
					<label>Question:</label>
					<input type="text" name="question_text">
				</p>
				<p>
					<label>Choice 1:</label>
					<input type="text" name="choice1">
				</p>
				<p>
					<label>Choice 2:</label>
					<input type="text" name="choice2">
				</p>
				<p>
					<label>Choice 3:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Choice 4:</label>
					<input type="text" name="choice4">
				</p>
				<p>
					<label>Choice 5:</label>
					<input type="text" name="choice5">
				</p>
				<p>
					<label>Correct Choice Number</label>
					<input type="number" name="correct_choice">
				</p>
				<input class="submit" type="submit" name="submit" value ="Submit">
		</form>
	</div>
</body>
</html>