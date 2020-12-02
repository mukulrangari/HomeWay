<?php

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $mobileno=$_POST["mobileno"];
    $pass=$_POST["pass"];
    //database connection
    $con = new mysqli('localhost', 'root','','homeway');
    //query to fetch data
    //query to delete row
    $q="select * from owners where EmailId=$email";
    $result = mysqli_query($con,$q);
    $n=mysqli_num_rows($result);
    if ($n == 1) {
            echo "email alread present. please login.";
        } 
    else {
        $query ="INSERT INTO owners 
        VALUES (NULL, '$fname', '$lname', '$email', '$mobileno', '$pass')";
        if($con->query($query)){
            echo "ok";
        }
        else{
            echo "fail";
        }
    }
    
?>