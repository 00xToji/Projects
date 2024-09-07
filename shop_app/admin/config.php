<?php

// database connection :
$conn = mysqli_connect('localhost','root','','online');

// check connection :
if(!$conn){
    die(mysqli_error($con));
}

?>