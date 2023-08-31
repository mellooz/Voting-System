<?php
session_start();
require("connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $std = $_POST["std"];

    $sql = "SELECT * FROM `userdata` WHERE username = '$username' and password='$password' and mobile='$mobile' and standard='$std'";
    $result = mysqli_query($con , $sql);

    if(mysqli_num_rows($result) > 0){
        $sql = "SELECT username,photo,votes,id FROM `userdata` WHERE standard='group' ";
        $groupresult = mysqli_query($con , $sql);

        if(mysqli_num_rows($groupresult) > 0){
            $groups = mysqli_fetch_all($groupresult , MYSQLI_ASSOC);

            $_SESSION["groups"] = $groups;
        }

        $data = mysqli_fetch_array($result);
        $_SESSION["id"] = $data["id"] ;
        $_SESSION["status"] = $data["status"] ;
        $_SESSION["data"] = $data ;

        header("location:dashboard.php");
        exit;



    }else{
        header("location:index.php");
        exit;
    }
}


?>




















