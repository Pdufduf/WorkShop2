<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Création d'un compte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="Script/inscriptionEleve.php" method="post">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->                        
                        <img src="images/logos/Epsi1.jpeg" alt="EPSI">
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Création du compte
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Entrez votre nom">
                    <input class="input100" type="text" name="nom" placeholder="Nom">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Entrez votre prenom">
                    <input class="input100" type="text" name="prenom" placeholder="Prenom">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Email">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#x2709;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
                    <input class="input100" type="password" name="pass2" placeholder="Mot de passe (Recopiez le)">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Date de naissance">
                    <input class="input100" type="text" name="dateNaissance" placeholder="Date de naissance (JJ/MM/AAAA)">
                    <span class="focus-input100" data-placeholder="&#128197;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Telephone">
                    <input class="input100" type="text" name="telephone" placeholder="Telephone">
                    <span class="focus-input100" data-placeholder="&#9742;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Classe">
                    <input class="input100" type="text" name="classe" placeholder="Classe">
                    <span class="focus-input100" data-placeholder="&#128211;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Créer le compte
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="/WorkShop2/index.php">
                        Se connecter ?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/animsition/js/animsition.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="js/main.js"></script>

</body>
</html>