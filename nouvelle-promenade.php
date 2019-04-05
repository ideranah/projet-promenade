<!doctype html>
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

        <div class="container-fluid">
            <form class="form-section" action="process_promenade.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-title">Titre : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="titre" id="form-title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-author">Auteur (qui êtes-vous)</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="auteur" id="form-author">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-country">Pays : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="pays" id="form-country">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-city">Ville : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="ville" id="form-city">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-zipcode">Code postal : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="codePostal" id="form-zipcode">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-departure">Lieu de départ : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="depart" id="form-departure">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-arrival">Lieu d'arrivée : </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control-lg" name="arrivee" id="form-arrival">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="form-description">Descriotion des étapes : </label>
                    </div>
                    <div class="offset-sm-1 col-sm-10 offset-sm-1">
                        <textarea class="form-control" name="description" id="form-description"rows="10"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <label for="form-file">Ajouter une photo : </label>
                    </div>
                    <div class="col-sm-12 ">
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input type="file" class="form-control-file" name="photo-promenade" id="form-file">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" class="btn" value="Enregistrer" >
                    </div>
                </div>
            </form>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>