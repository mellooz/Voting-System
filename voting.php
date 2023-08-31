<?php

session_start();
require("connect.php");

$votes = $_POST["gvote"];
$total_votes = $votes + 1 ;

$gid = $_POST["gid"];

$uid = $_SESSION["id"];

$sql1 = "UPDATE `userdata` set votes='$total_votes' WHERE id = '$gid'";   // votes update
$updatequery1 = mysqli_query($con , $sql1);

$sql2 = "UPDATE `userdata` set status=1 WHERE id = '$uid'";   // status update
$updatequery2 = mysqli_query($con , $sql2);

if($updatequery1 and $updatequery2){
    $getgroups = mysqli_query($con , "SELECT username,photo,votes,id FROM `userdata` WHERE standard='group' ");
    $groups = mysqli_fetch_all($getgroups , MYSQLI_ASSOC);
    
    $_SESSION['groups']=$groups ;
    $_SESSION['status']=1 ;

    header("location:dashboard.php");
    exit;

}else{
    header("location:dashboard.php");
    exit;
}


?>