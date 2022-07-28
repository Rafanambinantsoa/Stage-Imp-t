<?php
$con = mysqli_connect('localhost','root','','karim');

$search = $_POST['search'];

$query = "SELECT nif FROM `contribuables` where cin = '".$search."' AND confirmer = 1 ";
$result = mysqli_query($con , $query);

if($row = mysqli_fetch_assoc($result)){
    echo $row['nif'];
}
else{
    echo "no";
}