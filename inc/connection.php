<?php
$con = mysqli_connect('localhost' , 'myDatabase' , 'myPassword' , 'myDatabase');
if(!$con){
    echo 'database error';
    die();
}

?>