<?php
session_start();
if (!isset($_SESSION['admini'])) {
    header('location:http://localhost/ESSAIE/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body>
    <!-- <h1>Bonjour, Mr ou bien Madame 
    </h1>
    <button class="btn btn-info" id="deconnexion">Déconnexion</button> -->
    <!-- Header start -->
    <input type="checkbox" id="check" hidden>
    <header>
        <label for="check">
            <i class="fa-solid fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Espace Admin</h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn" id="deconnexion">Logout</a>
        </div>
    </header>
    <!-- Header end -->
    <!-- Side bar start -->
    <div class="sidebar">
        <center>
            <img src="mar.jpg" alt="" class="profile_image">
            <h4><?php echo $_SESSION['admini'] ?></h4>
        </center>
        <a href="#"><i class="fa-solid fa-cogs"></i><span> <label for="confirmer">Demande en Cours</label> </span></a>
        <a href="#"><i class="fa-solid fa-desktop"></i><span> <label for="nonconfirmer">NIF confirmer</label> </span></a>
        <a href="#"><i class="fa-solid fa-table"></i><span> <label for="declarant">Les Declarants</label></span></a>
        <a href="#"><i class="fa-solid fa-briefcase"></i><span> <label for="activite">Les Modifications</label></span></a>
        <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
    </div>
    <!-- Side bar end -->

    <!-- Content Start -->
    <div class="content">

        <!-- confirmer -->
        <input type="radio" id="confirmer" name="tabs" checked>
        <div class="con">
            <h3>Contribuables en Cours de demande de NIF</h3>
            <div id="displaydatatable">
            </div>

        </div>
        <!-- Non - Confirmer -->
        <input type="radio" id="nonconfirmer" name="tabs">
        <div class="con">
            <h3>Contribuables ayant un NIF confirmer </h3>
            <div id="nifconfirmer"></div>
        </div>
        <!-- Declarant -->
        <input type="radio" id="declarant" name="tabs">
        <div class="con">
            <h3>Listes des déclarants </h3>
            <div id="declarant_hono"></div>
        </div>

        <!-- Declarant -->
        <input type="radio" id="activite" name="tabs">
        <div class="con">
            <h3>Modifications </h3>
            <table class="table table-hover" id="tabl">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>NIF</th>
                        <th>Activité</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <!-- Content End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        //approuver des nif en cours
        function approuver(akutagawa) {
            $.ajax({
                url: "confirmer.php",
                type: 'POST',
                data: {
                    akutagawa: akutagawa
                },
                success: function(data, status) {
                    displaydata();
                }
            })
        }
        //rejet des nif en cours
        function mirak(deletenif) {
            $.ajax({
                url: "delete.php",
                type: 'POST',
                data: {
                    deletenif: deletenif
                },
                success: function(data, status) {
                    displaydata();
                }
            })
        }
        //Affichage des demande en cours de nif
        function displaydata() {
            var displaydata = "true";
            $.ajax({
                url: 'afficher.php',
                type: 'POST',
                data: {
                    didsplaysend: displaydata
                },
                success: function(data, status) {
                    $('#displaydatatable').html(data);
                    confirmer();
                }
            })
        }
        //affichage des nif confirmer
        function confirmer() {
            var hashbira = "true";
            $.ajax({
                url: 'nifconfirmer.php',
                type: 'POST',
                data: {
                    hashbira: hashbira
                },
                success: function(data, status) {
                    $('#nifconfirmer').html(data);

                }
            })
        }
        //Listes des Declarant
        function declarant() {
            var inosuke = "true";
            $.ajax({
                url: 'affiche_declarant.php',
                type: 'POST',
                data: {
                    inosuke: inosuke
                },
                success: function(data, status) {
                    $('#declarant_hono').html(data);

                }
            })
        }

        $(document).ready(function() {
            //non-confirmer
            displaydata();
            //confirmer
            confirmer();
            //les declarants
            declarant();
            Swal.fire({
                icon: 'success',
                title: 'Connecté',
                text: 'Bonne Navigation',
            })
            $('#deconnexion').click(function() {
                var queen = 'oliver';
                bootbox.confirm("Voulez vous vraiment vous Deconnecter ?", function(result) {
                    if (result != false) {
                        $.ajax({
                            url: 'deconnexion.php',
                            method: 'POST',
                            data: {
                                queen: queen
                            },
                            success: function() {
                                document.location.href = 'http://localhost/ESSAIE/index.php';

                            }
                        })
                    }

                })

            })

        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js"></script>

</body>

</html>