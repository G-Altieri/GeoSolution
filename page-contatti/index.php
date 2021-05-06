<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoSolution</title>

    <!-- Import Css e Script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mycss.css">
    <!-- <link rel="stylesheet" href="../assets/css/style2.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css?versione=<?php echo time(); ?>"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./assets/css/style.css?versione=<?php echo time(); ?>">


    <!-- Font -->
    <link rel="font" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="font">

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css?versione=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/main.css?versione=<?php echo time(); ?>">


    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!---Icon-->
    <link rel="icon" href="../assets/img/logo.svg">

</head>

<body>
<div class="bg-contact2" style="background-image: url('../assets/img/bg-contattami.jpg');">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form class="contact2-form validate-form" action="./mail/send.php" method="post">
                <span class="contact2-form-title">
                    Contattami
                </span>

                <div class="wrap-input2 validate-input" data-validate="Il Nome é obbligatorio">
                    <input class="input2" type="text" name="name">
                    <span class="focus-input2" data-placeholder="NOME"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate = "Mail non valida">
                    <input class="input2" type="text" name="email">
                    <span class="focus-input2" data-placeholder="EMAIL"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate = "Il Messaggio é Obbligatorio">
                    <textarea class="input2" name="message"></textarea>
                    <span class="focus-input2" data-placeholder="MESSAGGIO"></span>
                </div>

                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <button class="contact2-form-btn">
                            Invia
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
