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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body>
    <h1>Bonjour, Mr ou bien Madame <?php echo $_SESSION['admini'] ?>
    </h1>
    <button class="btn btn-info" id="deconnexion">Déconnexion</button>
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
                bootbox.confirm("Are you to disconnect ?", function(result) {
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