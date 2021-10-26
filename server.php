<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "test";
 
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username) && isset($password)){
 $sql = "SELECT * FROM user where username = '?'";
 if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
     mysqli_stmt_bind_param($stmt, "s", $username);
     //Set parameters

     //Attempt to execute the prepared statement
     if(mysqli_stmt_execute($stmt)){
         $result = mysqli_stmt_get_result($stmt);
     }
     while($row = $result->fetch_assoc()) {
         echo '<h1>'.$row['username'].'</h1>';
     }
 }
}
?>