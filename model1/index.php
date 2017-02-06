<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>générateur CV</title>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Accueil</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active" ><a href="#">Modèle Classique</a></li>
                    <li ><a href="../model2/index.php">Modèle Original</a></li>
                    <li><a href="../model3/index.php">Modèle Design</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="panel" align="center">
            <div class="panel-heading">
                <h2>CV Classique </h2>
            </div>
        </div>
       

        <div class="container">
            <form method="POST" action="form.php">
                <div class="row">
                    <div class="form-group">
                       <legend>Information personnelles</legend>
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="text" class="form-control" name="prenom" aria-describedby="emailHelp" placeholder="Prenom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse</label>
                        <input type="text" class="form-control" name="adresse" aria-describedby="emailHelp" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Code postal</label>
                        <input type="text" class="form-control" name="codep" aria-describedby="emailHelp" placeholder="Code postal">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mail</label>
                        <input type="email" class="form-control" name="mail" placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre du CV</label>
                        <input type="text" class="form-control" name="titre" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Numéro de tel</label>
                        <input type="text" class="form-control" name="num" placeholder="Telephone">
                    </div>
                </div><br>

                <div class="row a">
                    <div class="form-group">
                        <legend for="exampleTextarea">Expériences professionnelles</legend>
                        <input type="text" class="form-control" name="exp" aria-describedby="emailHelp" placeholder="Entreprises"><br>
                        <input type="text" class="form-control" name="pé" aria-describedby="emailHelp" placeholder="Activité"><br>
                        <input type="text" class="form-control" name="acti" aria-describedby="emailHelp" placeholder="Entreprises"><br>
                        <input type="text" class="form-control" name="vité" aria-describedby="emailHelp" placeholder="Activités">
                    </div>
                </div><br>
                <div class="row">
                    <div class="form-group">
                        <legend for="exampleTextarea">Formations</legend>
                        <input type="text" class="form-control" name="forma" aria-describedby="emailHelp" placeholder="Vos formations"><br>
                        <input type="text" class="form-control" name="de" aria-describedby="emailHelp" placeholder="Détails"><br>
                        <input type="text" class="form-control" name="tion" aria-describedby="emailHelp" placeholder="Vos formations"><br>
                        <input type="text" class="form-control" name="tail" aria-describedby="emailHelp" placeholder="Détails">
                    </div>
                </div><br>
                <div class="row a">
                    <div class="form-group">
                        <legend for="exampleTextarea">Compétences</legend>
                        <textarea class="form-control" name="comp" rows="3" placeholder="Citez vos compétences"></textarea>
                    </div>
                </div><br>
                <div class="row a">
                    <div class="form-group">
                        <legend for="exampleTextarea">Centre d'intérêts</legend>
                        <textarea class="form-control" name="loisir" rows="3" placeholder="Rédigez vos loisirs"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile"><h3>Photo de profil</h3></label>
                    <input type="file" class="form-control-file" name="photo" aria-describedby="fileHelp"><br>
                    <button type="submit" class="btn btn-success center" style="width:100px;">Valider</button>
                </div>
                

            </form>
        </div>
          <footer>
           <div id="footer">
            <div class="container" >
            
                    <div class="col-sm-4">
                        <span class="copyright">Copyright © Michael Sinakho</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github fa-2x" aria-hidden="true"></i></i></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">ITIC Paris</a>
                            </li>
                        </ul>
                    </div>
                </div>
          </div>
        </footer>
       
    </body>
</html>
