<?php

$con = mysqli_connect('localhost','root','','karim');
session_start();
if(isset($_POST['code'])){
    $jin = "SELECT * FROM mike where nom= '".$_POST['nom']."' AND code= '".$_POST['code']."' ";
    $result = mysqli_query($con , $jin);
    $k = mysqli_num_rows($result);
    if($k > 0 ){
        $_SESSION['admini'] = $_POST['nom'];
        echo 'success';
    }else{
        echo 'No';
    }
}