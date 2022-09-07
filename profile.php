<?php

include("db.php");
session_start();

$tusername= 'username';
$tage = 'age';
$tgender = 'gender';
$twork = 'work';
$tschoolattended = 'school_attended';


if(isset($_POST['submit']))
	{	
		$username= $_POST['username']; 
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$work = $_POST['work'];
		$schoolattended = $_POST['schoolattended'];

		$str="SELECT username from user WHERE username='$username'";

		$result=mysqli_query($connection,$str);
		
		if((mysqli_num_rows($result))>0)	
			{
	            echo "<center><h3><script>alert('Sorry.. This username is already exist !!');</script></h3></center>";
	            header("refresh:0;url=profile.php");
	        }
		else
			{
	            $str = "INSERT INTO user ($tusername,$tage, $tgender, $twork, $tschoolattended)
						VALUES ('$username', '$age', '$gender', '$work', '$schoolattended')";
				if((mysqli_query($connection,$str)))
				{
					header('location: main.php');
				}
			}
    }
 
?>

<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/profile.css">

<body>
	<form class="box" method="post">
		<h2 class="center">Register</h2>
		<input type="text" placeholder="Username" name="username" required>
		<input type="number" placeholder="Age" name="age" required>

		<select name="gender">
			<option hidden>Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>

		<select name="work">
			<option hidden>Work</option>
			<option value="Student">Student</option>
			<option value="Unemployed">Unemployed</option>
			<option value="Self Employed">Self Employed</option>
			<option  value="Company">Company</option>
			<option value="Other">Other</option>
		</select>

		<select name="schoolattended">
			<option hidden>School Attended</option>
			<option value="Current Highschool">Current High School</option>
			<option value="High School Graduate">High School Graduate</option>
			<option value="Current College">Current College</option>
			<option value="Collegegraduate">College Graduate</option>
			<option value="Other">Other</option>
		</select>

		<input type="submit" name="submit" value="Next"></button><br>
	</form>
</body>