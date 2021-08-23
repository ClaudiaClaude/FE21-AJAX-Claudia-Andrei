<?php
$conn=mysqli_connect('localhost','root', '' ,'ajaxtest');


if(isset($_POST['fname'])&&isset($_POST['lname'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);

    $query="INSERT INTO users (fname,lname) VALUES ('$fname','$lname')";

    if(mysqli_query($conn, $query)){
        echo "user added";
    }else{
        echo mysqli_error($conn);
    }
};

?>