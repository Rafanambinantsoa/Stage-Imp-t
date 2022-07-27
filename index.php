<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Essaie 2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <div class="lignes">
    <div class="l1"></div>
    <div class="l2"></div>
    <div class="l3"></div>
  </div>
  <div class="container-first">
    <h4><span>Bienvenus dans notre </span>
      <span>Site de </span>
      <span>Déclarations</span>
      <span> d'Impôts Synthétique </span>
    </h4>

    <!-- Modal -->
    <div class="modal fade" id="NIF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Veuiller Saisir votre CIN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Poour pouvoir Voir NIF</p>
            <input type="number" class="form-control" id="search">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="rechercher">Rechercher</button>
            <div class="alert alert-success" role="alert">
              <span id="cool"></span>
            </div>
            <div class="alert alert-warning" role="alert">
              <span id="nul"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-btns">
      <a href="http://localhost/ESSAIE/Creation/kim.php"> <button class="btn-first b1" id="kim">Création (NIF)</button></a>
      <button class="btn-first b2" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">Se Connecter</button>-
    </div>
    <div class="collapse collapse-horizontal" id="collapseWidthExample">
      <div class="card card-body" style="width: 300px; position:relative;left:16.9cm;top:1.1rem;background-color:#6e6409;">
        <div class="alert alert-dark" style="margin:3px ;" sty role="alert">
          <li style="cursor:pointer" style="margin-bottom:2px ;" data-bs-toggle="modal" data-bs-target="#exampleModal">Agent de l'impôt</li>
          <li style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#modal2"> Contribuable</li>
        </div>
      </div>
    </div>
  </div>




  <div class="container">
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user-check"></i>
      Connexion 1
    </button> -->

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Connexion Admin </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="">Nom</label>
            <input type="text" id="nom" class="form-control">

            <label for="">code</label>
            <input type="text" id="code" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" id="login" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal 2 -->
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
      <i class="fa-solid fa-user-check"></i>Connexion 2
    </button> -->


    <!-- Modal -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Connexion Contribuables</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="">NIF</label>
            <input type="text" class="form-control" id="nif">

            <label for="">CIN</label>
            <input type="text" class="form-control" id="cin">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" id="login2" class="btn btn-primary">Connexion</button>
          </div>
        </div>
      </div>
    </div>
    <ul class="medias">
      <li class="bulle"><span class="logo-medias">Mon <br>N.I.F</span></li>
    </ul>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="back_accueil/gsap.min.js"></script>
  <script src="back_accueil/jva.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="app.js"></script>
</body>

</html>