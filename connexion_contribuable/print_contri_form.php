<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container">
      <div class="display">
        <div class="gauche">
          <ul class="">
            <li>DIRECTION GENERALE DES IMPÔTS</li>
            <li class="margin2">DIRECTION REGIONALE DES IMPÔTS</li>
            <li class="margin2">Centre Fiscale A</li>
          </ul>
        </div>
        <div class="droite">
          <ul class="">
            <li>--- REPOBLIKAN'I MADAGASIKARA ---</li>
            <li>Fitiavana - Tanindrazana - Fandrosoana</li>
            <li class="margin"><h5>BORDEREAU DE VERSEMENT <br> DE L'IMPÔT SYNTHÉTIQUE </h5> </li>
            <li>Année : (Asio code php maneho date)</li>
          </ul>
        </div>
        <div class="image">
          <!-- Asio sary DGI iny ato -->
          <img src="" alt="" class="rounded img-fluid">
        </div>
      </div>

      <table class="table">
        <thead>
          <th colspan="2" class="text-center">Information sur le contribuables</th>
        </thead>
        <tbody>
          <tr>
            <td>Nom du Redevable : </td>
            <td> Rafanambinantsoa Maminirina Karim </td>
          </tr>
          <tr>
            <td>Nom commercial : </td>
            <td>Kim Production </td>
          </tr>
          <tr>
            <td>N° CIN :</td>
            <td>1234567891</td>
          </tr>
          <tr>
            <td>NIF : </td>
            <td>123456789054</td>
          </tr>
          <tr>
            <td>N° Statistique : </td>
            <td>12345678908876</td>
          </tr>
          <tr>
            <td>Addresse : </td>
            <td>Imandry New York State</td>
          </tr>
          <tr>
            <td>Lieu d'Exploitation : (Ataovy select)</td>
            <td>Dans tout l'île de Madagascar</td>
          </tr>
          
        </tbody>
      </table>

      <table class="table">
        <thead>
          <th colspan="2" class="text-center">Déclaration de chiffre d'afffaire ou de revenus acquis en 2022 (année - 1)</th>
        </thead>
        <tbody>
          <tr>
            <td>Activitées Exercées : </td>
            <td>Hacker </td>
          </tr>
          <tr>
            <td>Chiffre d'Afffaire Annuel :</td>
            <td>200.000.000 Ar :</td>
          </tr>
        </tbody>
      </table>

      <div class="signature">
        <div class="row">
          <div class="col"></div>
          <div class="col tsukasa">
            <p class="para">Fait à Fianarantsoa le (cmd php maneho ny date androany) </p>
              <p class="para" >Signature du déclarant</p>
          </div>
        </div>
      </div>

      <table class="table">
        <thead>
          <th colspan="3" class="text-center">Liquidation de l'Impôt  </th>
        </thead>
        <tbody>
          <tr>
            <th>RUBRIQUES</th>
            <th>Montant en Ar </th>
            <td>Cachet,Signature,nom et grade de l'agent taxateur</td>
          </tr>
          <tr>
            <!-- Somary Facultatif le izy raha ohatra ka tsy misy anle acomptes -->
            <td>Impôt Synthétique dû : </td>
            <td>(Formule : CA * 5%) </td>
            <td rowspan="3"></td>
            <!-- formule Impôt dû - Acomptes de l'année precedentes -->
          </tr>
          <tr>
            <td>Accompte : </td>
            <td>Facultatif</td>
          </tr>
          <tr>
            <td>Net à Payer  : </td>
            <td>10.000.000 Ar</td>
          </tr>
        </tbody>

      </table>

      <div class="signature">
        <div class="row">
          <div class="col"></div>
          <div class="col tsukasa">
            <p class="para">Cachet,signature,nom et grade du Receveur des Impôts </p>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>