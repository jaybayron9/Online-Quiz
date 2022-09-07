<?php

if (isset($_POST["username"]) and isset($_POST["password"])) 
  { 
    $username = $_POST["username"];
    $password = $_POST["password"];

    require 'db.php';

    if ($connection->connect_errno > 0) 
      {
        echo "Error";
        exit();
      }

    $sql = "SELECT u.id FROM admin AS u WHERE u.username = ? and u.password = ? LIMIT 1";
    $stmt = $connection->prepare($sql); 
    $stmt->bind_param("si", $username, $password);
    $stmt->execute();
    
    $result = $stmt->get_result(); 

    if ($result->num_rows == 1) 
      {
        session_start();
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: http://localhost/quiz/dashboard.php");

        // Use die() or exit() for security purpose
        exit();
      } 
      else 
        {
          echo "<center>
                  <h3>
                    <script>alert('Sorry.. Wrong Username (or) Password');</script>
                  </h3>
                </center>";
          header("refresh:0;url=login.php");
        }
    $connection->close();
  }

?>