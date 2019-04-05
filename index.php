<!doctype html>
<?php 
  require "classes/connexion.php";
  $appli = new Connexion();
?>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Icone boutons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Ma stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles.css">

    

    <title>Promenades</title>
  </head>
  <body>

      <div class="container-fluid">
        <div class="row">
          <div class="col-10 title-section">
              <a href="index.php">
                <h1 class="title-text">Promenons-nous</h1>
              </a>
          </div>
          <div class="col-2 bouton-section">
            <a href="nouvelle-promenade.php">
              <button class="btn"><i class="fa fa-plus"></i>  ajouter</button>
            </a>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <?php
          $promenades = $appli->getAllPromenades();
          foreach($promenades as $p){
        
          echo '<div class="row vignette">';
            echo '<div class="col-sm-12 col-lg-6 image-section">';
              echo '<a href="promenade.php?id='.$p->getId().'">';
                echo '<img class="image" src="'.$p->getPhoto().'" />';
              echo ' </a>';
            echo '</div>';
            echo '<div class="col-sm-12 col-lg-6 short-info-section">';
              echo '<h2>'.$p->getTitre().'</h2>';
              echo '<p>'.$p->getAuteur().'</p>';
              echo '<p>'.$p->getPays().'</p>';
              echo '<p>'.$p->getVille().'</p>';
            echo '</div>';
          echo '</div>';
          }
        ?>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>