
<?php
$con = mysqli_connect('localhost', 'root', '', 'karim');
if (isset($_POST['sukuna'])) {
    $table = "<table class='table table-hover'>
            <thead>
                <tr>
                    <th scope='col'>N I F</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Numéro CIN</th>
                    <th scope='col'>Activité</th>
                    <th scope='col'>Lieu d'exploitation</th>
                </tr>
            </thead>";
            $query = 'SELECT * from contribuables where confirmer = 1';
            $result =mysqli_query($con , $query);
            while($row = mysqli_fetch_assoc($result)){
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $nif = $row['nif'];
                $cin = $row['cin'];
                $activite = $row['activite'];
                $addresse = $row['addresse'];
                $lieu_ex = $row['lieu_ex'];
                $table.="<tr>
                    <td>$nif</td>
                    <td>$nom</td>
                    <td>$cin</td>
                    <td>$activite</td>
                    <td>$lieu_ex</td>
                    <input type='text' value='$nif' hidden >
                    <td>
                        <button class='btn btn-success' onclick='update($nif)' ><i class='fa-solid fa-check' style='margin-right: 7px;' ></i>Modifier</button>
                    </td>
                </tr>";
            }
            $table.='</table>';
            echo $table;
        }

