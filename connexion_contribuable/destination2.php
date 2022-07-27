<?php
session_start();
if (!isset($_SESSION['contribuable'])) {
    header('location:http://localhost/ESSAIE/index.php');
    exit();
} else {
    $con = mysqli_connect('localhost', 'root', '', 'karim');


    $query = "SELECT * FROM contribuables where cin = '" . $_SESSION['contribuable'] . "' ";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $lieu_ex = $row['lieu_ex'];
        $nif = $row['nif'];
        $cin = $row['cin'];
        $activite = $row['activite'];
        $addresse = $row['addresse'];
        $nom_commercial = $row['nom_commercial'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $num_stat = $row['num_stat'];

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Destination 2</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
            <link rel="stylesheet" href="prince.css">

        </head>

        <body>
            <!-- <h1>Bonjour, Mr votre Cin est : -->
            <?php //echo $_SESSION['contrbuable'] 
            ?>
            <!-- </h1> -->



            <div class="container" id="kmo">
                <h3 class="h">Formulaire de Déclaration d'Impôt Synthétique </h3>
                <div class="fomul">
                    <button class="btn btn-outline-danger decon" id="deconnexion2">Deconnexion</button>
                </div>

                <div class="line">
                    <div class="la"></div>
                    <div class="li"></div>
                    <div class="lo"></div>
                </div>

                <div class="formulaire">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nom et Prenom du Contribuable </span>
                        </div>
                        <input type="text" id="nom" aria-label="First name" class="form-control" value="<?php echo $prenom; ?>" disabled>
                        <input type="text" id="prenom" aria-label="Last name" class="form-control" value="<?php echo $nom; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nom Commmercial </span>
                        </div>
                        <input type="text" id="nom_commercial" aria-label="First name" class="form-control" value="<?php echo $nom_commercial; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Numéro CIN </span>
                        </div>
                        <input type="text" id="cin" aria-label="First name" class="form-control cin" value="<?php echo $cin; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> N.I.F( <i>numéro d'indentification fiscale</i> ) </span>
                        </div>
                        <input type="text" id="nif" aria-label="First name" class="form-control" value="<?php echo $nif; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Numéro Statistique </span>
                        </div>
                        <input type="text" id="num_stat" aria-label="First name" class="form-control" value="<?php echo $num_stat; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Addresse </span>
                        </div>
                        <input type="text" id="adrs" aria-label="First name" class="form-control" value="<?php echo $addresse; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Lieu d'Exploitation </span>
                        </div>
                        <input type="text" id="lieu_ex" aria-label="First name" class="form-control" value="<?php echo $lieu_ex; ?>" disabled>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Activitées Exercées</span>
                        </div>
                        <input type="text" id="activite" class="form-control" value="<?php echo $activite; ?>" disabled>

                    </div>
            <?php }
    } ?>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Chiffre d'Affaire Annuel </span>
                </div>
                <input type="text" id="maro" onblur="document.getElementById('is').value = this.value *5/100" aria-label="First name" class="form-control">
                <div class="input-group-prepend">
                    <span class="input-group-text">Ar </span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Impôt Synthétique à payer </span>
                </div>
                <input id="is" type="text" aria-label="First name" class="form-control" disabled>
                <div class="input-group-prepend">
                    <span class="input-group-text">Ar</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Date de Déclaration </span>
                </div>
                <input disabled type="text" id="date_dec" value="<?php
                                                                    $now = date("Y/m/d");
                                                                    echo $now;
                                                                    ?>" class="form-control">
            </div>
                </div>


                <div class="bouton">
                    <div class="row">
                        <div class="col">
                            <buttonc class="btn btn-success" id="enregistrer">Enregistrer</button>
                        </div>
                        <div class="col">
                            <a href="http://localhost/ESSAIE/fpdf184/kim.php" id="imprimer" ><buttonc class="btn btn-primary" >Imprimer</button></a>
                            
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>

            <!-- Asivo footer @ farany @zay hita tsra le zavatra ho fenoina -->
            <script>
                new Cleave('.cin', {
                    blocks: [3, 3, 3],
                    delimiters: ['  ', '  ', '  ']
                });

                new Cleave('#num_stat', {
                    blocks: [5, 2, 4, 1, 5],
                    delimiters: ['  ', '  ', '  ']
                });
                // boucle pour le nom
                var cleave = new Cleave('#nom', {
                    delimiters: [''],
                    blocks: [23],
                    uppercase: true
                });
                $(document).ready(function() {
                    $('#imprimer').hide();

                    Swal.fire({
                        icon: 'success',
                        title: 'Connecté',
                        text: 'Bonne Navigation',
                    })
                    //deconnexion contribuable
                    $('#deconnexion2').click(function() {
                        // alert("clicked");
                        var action = "logout";
                        bootbox.confirm("Are you sure?", function(result) {
                            if (result != false) {
                                $.ajax({
                                    url: 'deconnexion.php',
                                    method: 'POST',
                                    data: {
                                        action: action
                                    },
                                    success: function() {
                                        document.location.href = 'http://localhost/ESSAIE/index.php';
                                    }

                                })
                            }
                        })


                    })
                    //Enregistrement des declarants;
                    $('#enregistrer').click(function() {
                        var ca = $("#maro").val();
                        var date_dec = $("#date_dec").val();
                        var nif = $("#nif").val();
                        var is = $("#is").val();
                        // alert (nif);
                        if (ca != "") {
                            //limite de chiffre d'affaire
                            if (ca > 200000000) {
                                toastr.warning('Nope, <b>Chiffre d\'affaire dépassant la limite du centre fiscal </b>')
                            } else {
                                $.ajax({
                                    url: 'enregistrement.php',
                                    type: 'POST',
                                    data: {
                                        ca: ca,
                                        date_dec: date_dec,
                                        nif: nif,
                                        is: is
                                    },
                                    cache: false,
                                    success: function(dataResult) {
                                        // alert(dataResult);
                                        $('#imprimer').show();
                                        $('#enregistrer').hide();
                                        toastr.success('Beau travail, <b>Déclaration enregistré </b>')

                                    }
                                })
                            }

                        } else {
                            toastr.error('Hé, <b>Veuiller déclarer votre chiffre d\'affaire</b>');

                        }
                    })
                })
            </script>

        </body>

        </html>