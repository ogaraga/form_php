<?php 
if($_SERVER['REQUEST_METHOD']== 'POST'){

$conn = new mysqli('localhost', 'root', '', 'form register');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$gender=$_POST['gender'];

    if($conn){
        $sql = "INSERT INTO `members` (name, email, phone, location,gender)VALUES('$name', '$email', '$phone', '$location','$gender')";
        $outcome = mysqli_query($conn, $sql);
        if($outcome){
           echo 'form submission was successful';
        }
        else{
        echo 'Form submission failed!';
        }
    }
    else{
        die(mysqli_error($conn));
    }
}

?>