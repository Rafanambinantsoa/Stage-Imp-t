<?php
$con = mysqli_connect('localhost','root','','karim');

session_start();
if(isset($_POST['cin'])){
    $query = "SELECT * FROM contribuables where cin = '".$_POST['cin']."' and nif = '".$_POST['nif']."' ";
    $result = mysqli_query($con , $query);
    if(mysqli_num_rows($result) > 0 ){
        $_SESSION['contribuable'] = $_POST['cin'];
        echo 'Success';
    }
    else{
        echo 'No';
    }
}