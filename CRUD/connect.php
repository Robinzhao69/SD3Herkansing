<?php

$con = new mysqli('localhost', 'root', 'root', 'crudopdracht');

if(!$con){
    die(mysqli_error($con));
}
?>