<?php
session_start();
if(isset($_SESSION['status'])){
    if($_SESSION['status']!=1){
        header("location: index.php");
    }
}else{
    header("location: index.php");
}

?>