$(document).ready(function () {
    var cleave = new Cleave('#nom', {
        blocks: [20],
        uppercase: true
    });
    var cleave = new Cleave('#cin', {
        blocks: [12]
    });
    var cleave = new Cleave('#stat', {
        blocks: [17]
    });
    $('#valider').click(function () {
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var cin = $('#cin').val();
        var cin2 = $('#cin').val().length;
        var activite = $('#activite').val();
        var addresse = $('#addresse').val();
        var lieu_exploitaion = $('#lieu_exploitaion').val();
        var stat = $('#stat').val();
        var nom_commercial = $('#nom_commercial').val();
        var stot = $('#stat').val().length;
        // alert(stot);


        if (nom != "" && prenom != "" && cin != "" && activite != "" && addresse != "" && stat != "" && lieu_exploitaion != "") {
            // alert("non vide");
            if (cin2 < 12 || stot < 17 ||(cin2 <12 && stot < 17) ) {
                Swal.fire(
                    'Veuiller',
                    'vérifier votre CIN et Num_Statistique',
                    'error' //icon ny eto
                )
                alert(stat);
                // alert("cin insuffisant");
            }
            else {
                $.ajax({
                    url: 'marie.php',
                    type: 'POST',
                    data: {
                        nom: nom,
                        prenom: prenom,
                        cin: cin,
                        activite: activite,
                        addresse: addresse,
                        lieu_exploitaion: lieu_exploitaion,
                        stat: stat,
                        nom_commercial: nom_commercial
                    },
                    success: function (suc) {
                        // alert(suc);
                        Swal.fire({
                            icon: 'success',
                            title: 'Merci',
                            text: 'Votre demande de nif est bien envoyé '
                        })
                        $('#nom').val('');
                        $('#prenom').val('');
                        $('#activite').val('');
                        $('#cin').val('');
                        $('#lieu_exploitaion').val('');
                        $('#addresse').val('');
                        $('#stat').val('');
                        $('#nom_commercial').val('');
                    }
                })
            }


        }
        // else if( ){
        // }
        else {
            // alert("compete tout les champs de saisie");
            // toastr.error('<b>Veuiller Remplir les champs Vide</b>', '');
            Swal.fire(
                'Veuiller',
                'Compléter les champs Manquant',
                'question' //icon ny eto
            )

        }
    })
})