<?php

$con = mysqli_connect('localhost', 'root', '', 'karim');
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $first = $_POST['first'];
    $nic = $_POST['nic'];
    $job = $_POST['job'];
    $maps = $_POST['maps'];
    $id = $_POST['id'];

    $query = "UPDATE `contribuables` SET activite = '".$job."' , cin = '".$nic."' , nom = '".$nom."' , lieu_ex = '".$maps."' WHERE nif = '".$id."' ";
    
    $result = mysqli_query($con , $query);

    if($result){
        echo 'Cool';
    }
    else{
        echo mysqli_error($con);
    }
}
