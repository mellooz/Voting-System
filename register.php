<?php
require("connect.php");

$username = $_POST["username"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

$image = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

$std = $_POST["std"];


$sql = "SELECT * FROM `userdata` WHERE username='$username'";
$result = mysqli_query($con , $sql);
$num = mysqli_num_rows($result);
if($num > 0){
        echo "user already taken";
}else{
        if($password == $cpassword){
                $new = "image/".$image;
                move_uploaded_file($tmp_name , $new);
                $sql = "INSERT INTO `userdata` (username , mobile , password , photo , standard , status , votes) VALUES('$username' , '$mobile' , '$password' , '$new' , '$std' , 0 , 0)";
                $result = mysqli_query($con , $sql);
                header("location:index.php");
                exit;
        }else{
                echo "password dosn't match";
        }
}

?>