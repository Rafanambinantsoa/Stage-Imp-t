<?php
$con = mysqli_connect('localhost','root','','karim');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$cin = $_POST['cin'];
$activite = $_POST['activite'];
$addresse = $_POST['addresse'];
$lieu_exploitaion = $_POST['lieu_exploitaion'];
$stat = $_POST['stat'];
$nom_commercial = $_POST['nom_commercial'];

$query = "INSERT INTO `contribuables` (`cin`, `activite`, `addresse`, `lieu_ex`, `nom_commercial`, `nom`, `prenom`, `num_stat`) values
('".$cin."' ,'".$activite."' ,'".$addresse."' ,'".$lieu_exploitaion."' ,'".$nom_commercial."' ,'".$nom."' ,'".$prenom."' ,'".$stat."')";

$result = mysqli_query($con , $query);

if($result){
    echo 'success';
}
else{
    echo 'nope';
}