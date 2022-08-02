//approuver des nif en cours
function approuver(akutagawa) {
    $.ajax({
        url: "confirmer.php",
        type: 'POST',
        data: {
            akutagawa: akutagawa
        },
        success: function (data, status) {
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
        success: function (data, status) {
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
        success: function (data, status) {
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
        success: function (data, status) {
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
        success: function (data, status) {
            $('#declarant_hono').html(data);

        }
    })
}
//Modification ou bien les mises à jour;
function idao() {
    // $('#hiddendata').val(updateid);

    var sukuna = "true";
    $.ajax({
        url: 'updating.php',
        type: 'POST',
        data: {
            sukuna: sukuna
        },
        success: function (data, status) {
            $('#modif').html(data);
            declarant();
            $('#mise').click(function () {
                // alert("kim");
                // var mention   = $(this).parent("td").prev("td").prev("td").text();
                // alert(mention);
            })

        }
    })
}
// Quand on Click sur sur le Bouton modifier, on affiche le modal et les information à Modifier
function update(kia){
    // alert(kia);
    $('#hiddendata').val(kia);
    $('#exampleModal').modal("show");

    $.ajax({
        url:'update.php',
        type:'POST',
        data:{
            kia:kia
        },
        success:function(data,status){
            var userid = JSON.parse(data);
            $('#name').val(userid.nom),
            $('#firstname').val(userid.prenom),
            $('#nic').val(userid.cin),
            $('#job').val(userid.activite),
            $('#maps').val(userid.lieu_ex)
        }
    })
    
}

// function update() {
//     $.get("destination.php", function(data) {
//       $(".con").html(data);
//       window.setTimeout(update, 10000);
//     });
//   }


$(document).ready(function () {
    //non-confirmer
    displaydata();
    //confirmer
    confirmer();
    //les declarants
    declarant();
    //modification;
    idao();
    Swal.fire({
        icon: 'success',
        title: 'Connecté',
        text: 'Bonne Navigation',
    })

    $('#deconnexion').click(function () {
        var queen = 'oliver';
        bootbox.confirm("Voulez vous vraiment vous Deconnecter ?", function (result) {
            if (result != false) {
                $.ajax({
                    url: 'deconnexion.php',
                    method: 'POST',
                    data: {
                        queen: queen
                    },
                    success: function () {
                        document.location.href = 'http://localhost/ESSAIE/index.php';

                    }
                })
            }

        })

    })

})