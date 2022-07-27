<?php
require('fpdf.php');
//  L-T-
session_start();
$con = mysqli_connect('localhost', 'root', '', 'karim');
$_SESSION['contribuable'];
$query = "SELECT contribuables.nif as nif , contribuables.nom AS nom , contribuables.activite as activite , contribuables.addresse as addresse , contribuables.cin as cin ,
 contribuables.lieu_ex as lieu_ex , contribuables.nom_commercial as nom_commercial , contribuables.prenom as prenom , contribuables.num_stat as num_stat , enregistrement.chiffre_affaire as chiffre , enregistrement.impot_payer	as impot , 
 enregistrement.retard as retard
 FROM contribuables INNER JOIN enregistrement ON contribuables.nif = enregistrement.nif and contribuables.cin = '".$_SESSION['contribuable']."' and enregistrement.chiffre_affaire = '".$_SESSION['chif']."'  ;";

$result = mysqli_query($con , $query);
while($row = mysqli_fetch_assoc($result)){
$date1 = date("Y");
$date2 = date("Y") -1 ;
$date3 = date("d/m/Y");
$net_payer = $row['retard'] + $row['impot'];

header('Content-Type: text/html; charset=UTF-8');
$pdf = new FPDF();
$pdf->AddPage();
//wifth heihgt text border , end lin
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(80, 5, "DIRECTION GENERALE DES IMPOTS", 0, 0, "C");
$pdf->Cell(70, 5, "REPOBLIKAN'I MADAGASIKARA", 0, 1, "C");
//Right , 
$pdf->Image('téléchargement.png', 155, 0);

$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(100, 5, "", 0, 0);
$pdf->Cell(35, 3, "Fitiavana- Tanindrazana- Fandrosoana", 0, 1, "C");

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(81, 5, "DIRECTION REGIONALE DES IMPOTS", 0, 1, "C");

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(80, 5, "", 0, 0);
$pdf->Cell(70, 5, "BORDEREAU DE VERSEMENT ", 0, 1, "C");

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(70, 5, "Centre Fiscale A ", 0, 0, "C");
$pdf->Cell(10, 5, "", 0, 0, "C");
$pdf->Cell(70, 5, "DE L'IMPOT SYNTHETIQUE ", 0, 1, "C");

$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(100, 5, "", 0, 0);
$pdf->Cell(20, 5, utf8_decode('Année : '), 0, 0);
$pdf->Cell(20, 5, utf8_decode($date1), 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(1, 10, "", 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 5, utf8_decode('RENSEIGNEMENTS SUR LE CONTRIBUABLE (filazalazana ny momba ny mpandoa hetra) '), 1, 1, "C");

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "Nom du Redevable (Anaran 'ny mpandoa Hetra) : ", 'L', 0);
$pdf->Cell(40, 5,$row['nom'] , 0, 0);
$pdf->Cell(0, 5,$row['prenom'] , 'R', 1);

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "Nom du Commercial (Anaran 'ny tsena) : ", 'L', 0);
$pdf->Cell(0, 5, $row['nom_commercial'], 'R', 1);

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "CIN (Karapanondrom-pirenena laharana faha) :", 'L', 0);
$pdf->Cell(0, 5, $row['cin'], 'R', 1);

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "NIF (Laharam-pamatarana ara-ketra) :", 'L', 0);
$pdf->Cell(30, 5, $row['nif'], 0, 0);
$pdf->Cell(30, 5, utf8_decode("N°Stat : "), 0, 0);
$pdf->Cell(0, 5,$row['num_stat'], 'R', 1);

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "Addresse (Adiresy)", 'L', 0);
$pdf->Cell(0, 5, $row['addresse'], 'R', 1);

$pdf->Cell(0, 3, "", 'LR', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80, 5, "Lieu d'Exploitaion : ", 'LB', 0);
$pdf->Cell(0, 5,utf8_decode($row['lieu_ex']), 'RB', 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, "", 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(150, 5, "DECLARATION DE CHIFFRE D'AFFAIRE OU REVENUS ACQUIS EN :  ", 'TL', 0, "C");
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 5,$date2, "RT", 1);

$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 3, "(Filazalazana ny vola miditra tamin'ny taona)", 'LRB', 1, 'C');

$pdf->Cell(0, 5, "", 'LR', 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(90, 5, utf8_decode("Activités Exercés"), 'L', 0, "C");
$pdf->Cell(0, 5, utf8_decode("Chiffres d'Affaire Annuel"), 'R', 1, "C");

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 5, utf8_decode($row['activite']), 1, 0, 'C');
$pdf->Cell(0, 5, utf8_decode($row['chiffre']).'  Ar', 1, 1, "C");

$pdf->Cell(0, 5, "", 'LRB', 1);

$pdf->Cell(0, 10, "", 0, 1);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(110, 5, "", 0, 0);
$pdf->Cell(40, 5, utf8_decode("Fait à Fianarantsoa , "), 0, 0);
$pdf->Cell(0, 5, $date3, 0, 1);

$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(130, 5, "", 0, 0);
$pdf->Cell(0, 5, utf8_decode("Signature du déclarant"), 0, 1);

$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(100, 5, "", 0, 0);
$pdf->Cell(0, 5, utf8_decode("(Sonian'ny mpanao filazana)"), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(1, 20, "", 0, 1);


$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 5, utf8_decode("LIQUIDATION DE L'IMPÔT (Fikajiana ny hetra) "), 1, 1, "C");

$pdf->Cell(0, 10, utf8_decode(""), 'LR', 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50, 5, utf8_decode("RUBRIQUE"), 1, 0, "C");
$pdf->Cell(45, 5, utf8_decode("MONTANT"), 1, 0, "C");
$pdf->Cell(0, 5, utf8_decode("Cachet, Signature, nom et Grade de l'agent Taxateur"), 1, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, 5, utf8_decode("Impôt dû : "), 1, 0);
$pdf->Cell(45, 5, utf8_decode($row['impot']).'  Ar ', 1, 0);
$pdf->Cell(0, 5, utf8_decode(""), 'LRT', 1);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, 5, utf8_decode("Retard  : "), 1, 0);
$pdf->Cell(45, 5, utf8_decode($row['retard']).'   Ar', 1, 0);
$pdf->Cell(0, 5, utf8_decode(""), 'R', 1);

$pdf->SetFont('Arial', '', 10);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, 5, utf8_decode("Total à Payer  : "), 1, 0);
$pdf->Cell(45, 5, utf8_decode($net_payer).'   Ar', 1, 0);
$pdf->Cell(0, 5, utf8_decode(""), 'LRB', 1);

$pdf->Cell(1, 15, "", 0, 1);

$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(100, 5, "", 0, 0);
$pdf->Cell(0, 5, utf8_decode("Cachet , signature,nom et grade du Receveur des Impôts "), 0, 1, 'C');

$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(100, 5, "", 0, 0);
$pdf->Cell(0, 5, utf8_decode("Sonian'ny Mpandray Vola  "), 0, 1, 'R');
$pdf->Output();
}

