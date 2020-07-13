<?php


$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$inputEmail = filter_input(INPUT_POST, 'inputEmail');
$inputPassword = filter_input(INPUT_POST, 'inputPassword');


//if ((!empty($fname))|| (!empty($lname)) || (!empty($inputEmail)) || (!empty($inputPassword)) || (!empty($inputPassword)) {
if (empty($fname) || (empty($lname) || (empty($inputEmail) || empty($inputPassword)) {

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "usersignup";

    //connection

    $conn = new mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()){
      die('connect Error('. mysqli_connect_error() .') '. mysqli_connect_error());
    }
    else{
      $sql = "INSERT INTO student (student_fname, student_lname, student_inputEmail, student_inputPassword, student_inputPassword) VALUES
      ('$lname', '$fname', '$inputEmail', '$inputPassword')";
      if ($conn->query($sql)){
        echo "New record inserted successfully";
      }
      else{
        echo "Error: ". $sql ."<br>". $conn->error;
      }
      $conn->close();

}
else{
  echo "All field are required";
  die();
}
?>
