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
        <a href="#"><i class="fa-solid fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fa-solid fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fa-solid fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fa-solid fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fa-solid fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!-- Side bar end -->

    <!-- Content Start -->
    <div class="content">

    </div>
    <!-- Content End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
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