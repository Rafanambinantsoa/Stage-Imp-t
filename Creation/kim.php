<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="kim.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="title">
        <h1>Formulaire de Création de NIF (Numero d'Identification Fiscale)</h1>
    </div>
    <div class="container">
        <div class="left">
            <div class="formbox">
                <input type="text"id="nom" placeholder="Nom "autocomplete="off">
                <input type="text"id="prenom" placeholder="Prenom "autocomplete="off">
                <input type="number"id="cin" placeholder="C I N "autocomplete="off">
                <input type="number"id="stat" placeholder="Num_Stat "autocomplete="off">
                <input type="number"id="confirmer" value="0" hidden>
            </div>
        </div>
        <div class="right">
            <div class="formbox">
                <input type="text" id="activite" placeholder="Activité Exercées "autocomplete="off">
                <input type="text" id="addresse"  placeholder="Addresse Actuel  "autocomplete="off">
                <input type="text" id="lieu_exploitaion"  placeholder="Lieu d'exploitaion   "autocomplete="off">
                <input type="text" id="nom_commercial"  placeholder="Nom commercial   "autocomplete="off">
                <button class="btn btn-outline-secondary valider" id="valider">Envoyer</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="kim.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>