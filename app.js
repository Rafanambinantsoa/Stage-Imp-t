$(document).ready(function () {
    $('.alert-warning').hide();
    $('.alert-success').hide();
    $('[data-toggle="popover"]').popover();
    //modal 1
    $('#login').click(function () {
        var code = $('#code').val();
        var nom = $('#nom').val();
        if (nom != "" && code != "") {
            $.ajax({
                url: 'connexion_admin/admin.php',
                method: 'POST',
                data: { nom: nom, code: code },
                success: function (data) {
                    // alert(data)
                    if (data == 'No') {
                        // alert("Wrong Data");
                        Swal.fire({
                            icon: 'error',
                            title: 'Désoler veuiller',
                            text: 'Verifier votre code ou bien votre nom!',
                        })
                    } else {
                        document.location.href = 'connexion_admin/destination.php';
                        $('#exampleModal').modal('hide');
                        $("#nom").val("");
                        $("#code").val("");
                        // alert("Success loged in");
                    }
                }
            })
        }
        else {
            toastr.error('Nope, <b> Veuiller remplir tous les champs </b>')

            // alert("Veuiller remplir tous les champs");
        }
    })

    // modal 2

    $("#login2").click(function () {
        var cin = $("#cin").val();
        var nif = $("#nif").val();
        if (cin != 0 && nif != 0) {
            $.ajax({
                url: 'connexion_contribuable/contribuable.php',
                method: 'POST',
                data: { cin: cin, nif: nif },
                success: function (data) {
                    if (data == "No") {
                        Swal.fire({
                            icon: 'error',
                            title: 'Désoler veuiller',
                            text: 'Verifier votre cin et nif!',
                        })
                        // alert("Wrong Login Information");
                    }
                    else {

                        // alert("logged in succcessfull dude");
                        $('#modal2').modal('hide');
                        $("#cin").val("");
                        $("#nif").val("");
                        document.location.href = "connexion_contribuable/destination2.php"

                    }
                }
            })
        } else {
            toastr.error('Nope, <b> Veuiller remplir tous les champs </b>')
        }
    })


    $('.bulle').click(function () {
        // alert('clicked');
        $('#NIF').modal('show');
    })
    $('#rechercher').click(function () {
        // alert('clicked');
        $('#nul').val("");
        $('#cool').val("");
        $('.alert-success').hide();
        $('.alert-warning').hide();
        var search = $('#search').val();
        if (search != '') {
            $.ajax({
                url: 'back_accueil/mon_nif.php',
                type: 'POST',
                data: { search: search },
                success: function (sir) {
                    if (sir == 'no') {
                        $('.alert-success').hide();
                        $('.alert-warning').show();
                        $("#nul").append("Vous n'avez pas Encore de NIF");
                    }
                    else {
                        $('.alert-success').show();
                        $('.alert-warning').hide();
                        $("#cool").append("Votre nif est" + sir);
                    }
                }
            })
        }
        else {
            toastr.error('Nope, <b> Entrer le numéro CIN à Rechercher </b>')
        }
    })

})