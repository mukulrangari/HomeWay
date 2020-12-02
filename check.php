<?php 
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $con = new mysqli('localhost', 'root','','homeway');
    $query = "SELECT * FROM user WHERE EmailId =$email AND Password=$pass ";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) == 1) {
    //Pass
    echo "ok";
    } else {
    //Fail
    echo "fail";
    }
?>