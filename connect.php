<?php

$con = mysqli_connect('localhost','root','','voting');

if(!$con){
    echo die(mysqli_error($con));
}

?>