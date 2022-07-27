<?php
$con = mysqli_connect('localhost','root','','karim');

$query = "SELECT cin FROM `contribuables` where cin  = '".$_POST['cin']."'";
$result = mysqli_query($con , $query);
$jin = mysqli_num_rows($result);
if($jin > 0){
    echo 'nope';
}
else{
    echo 'cool';
}