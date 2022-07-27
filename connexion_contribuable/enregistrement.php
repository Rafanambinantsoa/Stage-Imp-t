<P></P
<?php
$con = mysqli_connect('localhost','root','','karim');
session_start();
$ca = $_POST['ca'];
$_SESSION['chif'] = $_POST['ca'];
$date_dec = $_POST['date_dec'];
$nif = $_POST['nif'];
$is = $_POST['is'];

$sql = "INSERT INTO `enregistrement` (`dte_erg`, `nif` , `chiffre_affaire` , `impot_payer` ) VALUES ('$date_dec', '$nif' , '$ca' , '$is' )";

if (mysqli_query($con, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode((array("statusCode" => 201)));
}
mysqli_close($con);
?>

