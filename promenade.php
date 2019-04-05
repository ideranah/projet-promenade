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
          <div class="col-12 title-section">
              <a href="index.php">
                <h1 class="title-text">Promenons-nous</h1>
              </a>
          </div>
        </div>
      </div>

      <?php
        $id = $_GET["id"];
        $promenade = $appli->getPromenadeById($id);
      ?>

        <div class="container-fluid page-background">
            <div class="titre-promenade">
                <h2><?php echo $promenade->getTitre(); ?></h2>
            </div>
           <div class="row">
               <div class="col-sm-12 col-lg-6">
                    <img class="image-promenade" src="<?php echo $promenade->getPhoto(); ?>" alt="Photo promenade numéro <?php echo $promenade->getId(); ?>"/>
               </div>
               <div class="col-sm-12 col-lg-6">
                   <div class="row">
                       <div class="col-sm-12 col-md-4">
                           <p>By <?php echo $promenade->getAuteur(); ?></p>
                           <p><i class="fas fa-globe-europe"> <span>  <?php echo $promenade->getPays(); ?></span></i> </p>
                           <p><i class="fas fa-map-marker-alt"> <span>  <?php echo $promenade->getVille()." ".$promenade->getZipCode(); ?></span></i> </p>
                           <p><i class="fas fa-sign-out-alt"> <span>  <?php echo "Départ : ".$promenade->getDepart(); ?></span></i> </p>
                           <p><i class="fas fa-sign-in-alt"> <span>  <?php echo "Arrivée : ".$promenade->getArrivee(); ?></span></i> </p>
                       </div>
                       <div class="col-sm-12 col-md-8">
                           <p><?php echo $promenade->getDescription(); ?></p>
                       </div>
                   </div>
               </div>
           </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>