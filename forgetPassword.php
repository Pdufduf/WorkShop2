<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mot de passe oublié</title>
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

    <script>

    function myFunction() {
/*
            if(isset($_POST['email'])){*/
                confirm('Email envoyé');
                /*header("Location: /WorkShop2/index.php");
                exit;*/
    }

</script>
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="images/logos/Epsi1.jpeg" alt="EPSI">
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Mot de passe oublié
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Entrer votre email">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#x2709;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" onclick="myFunction()">
                        <form class="login100-form validate-form" action="../WorkShop2/sendMail.php" method="post">
 
                            <a href='/WorkShop2/index.php'> Envoyer l'email</a>
                        </form>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>




<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>