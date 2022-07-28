<?php
$con = mysqli_connect('localhost', 'root', '', 'karim');
if (isset($_POST['inosuke'])) {
    $table = "<table class='table table-hover'>
            <thead>
                <tr>
                    <th scope='col'>N I F</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Activité Exercées</th>
                    <th scope='col'>Lieu d'Exploitation</th>
                    <th scope='col'>Chiffre d'affaire</th>
                    <th scope='col'>Impôt Synthétique  </th>
                    <th scope='col'>Date de Déclaration</th>
                </tr>
            </thead>";
    $query = "SELECT contribuables.nom as nom , contribuables.nif as nif , contribuables.activite as activite , contribuables.lieu_ex as lieu ,
    enregistrement.chiffre_affaire as chiffre , enregistrement.impot_payer as impot_synt , enregistrement.dte_erg as date_erg 
    FROM contribuables INNER JOIN enregistrement WHERE enregistrement.nif = contribuables.nif";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $nom = $row['nom'];
        $nif = $row['nif'];
        $activite = $row['activite'];
        $lieu_ex = $row['lieu'];
        $chiffre = $row['chiffre'];
        $impot_synt = $row['impot_synt'];
        $date_erg = $row['date_erg'];
        $table .= "<tr>
                    <td>$nif</td>
                    <td>$nom</td>
                    <td>$activite</td>
                    <td>$lieu_ex</td>
                    <td>$chiffre</td>
                    <td>$impot_synt</td>
                    <td>$date_erg</td>
                    <td>
                </tr>";
    }
    $table .= '</table>';
    echo $table;
}
