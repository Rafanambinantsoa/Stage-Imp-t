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
        var confirmer = $('#confirmer').val();
        
        // alert(stot);


        if (nom != "" && prenom != "" && cin != "" && activite != "" && addresse != "" && stat != "" && lieu_exploitaion != "") {
            if((cin2 < 12 && stot < 17) || cin2 < 12 || stot <17 ){
                // alert('cin ou bien nif incomplète');
                Swal.fire(
                    'Veuiller',
                    'vérifier votre CIN ou bien votre NIF',
                    'info' //icon ny eto
                )
            }else{
                $.ajax({
                    url:'check_cin.php',
                    type:'POST',
                    data:{cin:cin},
                    success:function(dio){
                        if(dio =='nope'){
                            // alert('Ce CIN  a déja un NIF');
                            Swal.fire(
                                'Désolé',
                                'ce CIN possède déja un NIF',
                                'warning' //icon ny eto
                            )
                        }
                        else{
                            $.ajax({
                                url:'marie.php',
                                type:'post',
                                data:{
                                    nom:nom,
                                    prenom:prenom,
                                    cin:cin,
                                    activite:activite,
                                    addresse:addresse,
                                    lieu_exploitaion:lieu_exploitaion,
                                    stat:stat,
                                    nom_commercial:nom_commercial,
                                    confirmer:confirmer
                                },
                                success:function(auf){
                                    if(auf == 'success'){
                                        // alert('data inserted');
                                        Swal.fire(
                                            'Merci',
                                            'Votre Demande de NIF a été bien envoyé',
                                            'success' //icon ny eto
                                        )
                                        $('#nom').val("");
                                        $('#prenom').val("");
                                        $('#cin').val("");
                                        $('#activite').val("");
                                        $('#addresse').val("");
                                        $('#lieu_exploitaion').val("");
                                        $('#stat').val("");
                                        $('#nom_commercial').val("");
                                    }
                                    else{
                                        alert('nope');
                                    }
                                }
                            })
                        }
                    }
                })
            }

        }
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