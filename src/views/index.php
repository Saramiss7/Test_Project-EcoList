<?php 
$showSuccessToast = isset($_GET['success']) && $_GET['success'] == 1; 
$showErrorToast = isset($_GET['error']) && $_GET['error'] == 1; ?> 

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoList</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/modalIndex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

      <!--Cookie constent-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.css">
    <script type="module" src="./js/cookieconsent-config.js"></script>
</head>

<body>
  <?php include "navbar.php"; ?>
  
<div class="container my-5">
<!--Infopage-->
  <div class="row align-items-center first">
    <div class="col-12 col-md-6 text-center text-md-start">
        <h1>EcoList</h1>
    </div>
  </div>

  <!--Modal-->
  <div id="custom-modal" class="custom-modal-container"> 
        <div class="custom-modal-content"> 
          <span class="close">&times;</span>
          <div class="modal_text"> 
            <h3 id="modal_title" class="text-center fw-600 mt-10 mb-5">Benvingut a EcoLlist!</h3>
            <p id="modal_info" class="text-center">
              La cooperativa VilaCendrassos ha decidit crear una aplicació web per centralitzar tots els productes ecològics que ofereixen els seus socis i col·laboradors. 
              Fins ara, cada botiga o taller gestionava el seu propi catàleg, però ara volen tenir una plataforma comuna on tothom pugui introduir els seus productes i 
              consultar un llistat general amb tota l’oferta eco del territori.
            </p>
          </div> 
        </div> 
      </div>
    </div>

  <button id="ranking" class="btn btn-success mt-4 mb-4"><a href="index.php?r=form" class="nav-link">Formulari</a></button>
  <button id="ranking" class="btn btn-success mt-4 mb-4"><a href="index.php?r=llistat" class="nav-link">Veure llistat</a></button>

    <!-- Toast container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="successToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">ODS actualitzat</strong>
          <small>Ara mateix</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Canvis desats correctament.
        </div>
      </div>

      <div id="errorToast" class="toast text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Error</strong>
          <small>Ara mateix</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Hi ha hagut un error en desar els canvis.
        </div>
      </div>
    </div>

    <script>
      const showSuccess = <?= $showSuccessToast ? 'true' : 'false' ?>;
      const showError = <?= $showErrorToast ? 'true' : 'false' ?>;

      document.addEventListener("DOMContentLoaded", () => {
        const toastElSuccess = document.getElementById('successToast');
        const toastElError = document.getElementById('errorToast');

        if (showSuccess && toastElSuccess) {
          new bootstrap.Toast(toastElSuccess).show();
        }

        if (showError && toastElError) {
          new bootstrap.Toast(toastElError).show();
        }
      });
    </script>

  <script src="./js/modalIndex.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer><?php include "footer.php"; ?></footer>
</html>