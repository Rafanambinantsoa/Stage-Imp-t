<?php
$con = mysqli_connect('localhost','root','','karim');

$query = "SELECT num_stat FROM `contribuables` where num_stat  = '".$_POST['stat']."'";
$result = mysqli_query($con , $query);
$jin = mysqli_num_rows($result);
if($jin > 0){
    echo 'non';
}
else{
    echo 'cool';
}