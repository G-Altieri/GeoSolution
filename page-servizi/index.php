<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoSolution</title>

    <!-- Import Css e Script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/mycss.css">
    <!-- <link rel="stylesheet" href="../assets/css/style2.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css?versione=<?php echo time(); ?>"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css?versione=<?php echo time(); ?>">


    <!-- Font -->
    <link rel="font" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="font">




    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!---Icon-->
    <link rel="icon" href="../assets/img/logo.svg">

</head>


<body>

    <div class="bg">
    </div>

    <div class="container-md content bg-aziende">



        <!-- NavBar -->

        <div class="nav-border nav container-md " id="idnav">

            <!-- Logo GeoSolution -->
            <div class="container-nav-logo">
                <a href="../index.php"><img src="../assets/img/logo-black.svg" alt="Logo_GeoSolution"
                        class="nav-logo "></a>
            </div>

            <div class="container-nav-menu">
                <div class="nav-menu-logo" id="idmenu">
                    <!-- onclick="this.classList.toggle('active')" -->
                    <svg class="ham ham6" viewBox="0 0 100 100" id="id-ham" onclick="this.classList.toggle('active')">
                        <path class="line top"
                            d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                        <path class="line middle"
                            d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                        <path class="line bottom"
                            d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
                    </svg>

                </div>
            </div>

            <!-- <div class="nav-menu-logo " href="https://www.google.com"></div> -->

            <!-- Title GeoSolution svg animated -->
            <div class="container-title-svg">
                <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1603.67 217.08">

                    <path class="cls-1"
                        d="M156.14,76.54a58.3,58.3,0,0,0-22.59-25.42q-14.79-9-34.42-9a70,70,0,0,0-35.37,9A63.65,63.65,0,0,0,39,76.94q-9,16.82-9,38.86t9,38.72a63.81,63.81,0,0,0,24.74,25.69,69.86,69.86,0,0,0,35.37,9q27.42,0,45.18-16.41T165,128.44H90.25v-19.9H191.1v18.82a93.23,93.23,0,0,1-14.52,42.36A89.81,89.81,0,0,1,144,200.11q-20.17,11.16-44.91,11.16A94.6,94.6,0,0,1,51.52,199a89.68,89.68,0,0,1-34-34Q5,143.23,5,115.8T17.51,66.45a89.54,89.54,0,0,1,34-34.15A94.6,94.6,0,0,1,99.13,20.06Q129,20.06,152,34.85t33.48,41.69Z" />
                    <path class="cls-1"
                        d="M357,145.11H239.24q1.33,21.78,14.92,34t33,12.24q15.86,0,26.49-7.4a39.13,39.13,0,0,0,14.92-19.76h26.36a63.38,63.38,0,0,1-23.67,34.55q-17.74,13.32-44.1,13.32-21,0-37.52-9.42a66.56,66.56,0,0,1-26-26.76q-9.42-17.34-9.41-40.2t9.14-40.07a64.24,64.24,0,0,1,25.68-26.49q16.54-9.28,38.06-9.28,21,0,37.11,9.15A63.33,63.33,0,0,1,349.1,94.15q8.73,16,8.74,36.17A143.32,143.32,0,0,1,357,145.11Zm-30.66-44a40.27,40.27,0,0,0-16.81-15.33A52.48,52.48,0,0,0,286,80.57q-18.55,0-31.6,11.83t-14.92,32.81h93.05Q332.56,111.23,326.37,101.14Z" />
                    <path class="cls-1"
                        d="M416.87,202.66a66.9,66.9,0,0,1-26.36-26.76Q381,158.56,381,135.7q0-22.59,9.82-39.94a67.63,67.63,0,0,1,26.76-26.62q16.93-9.28,37.92-9.28t37.92,9.28a67.92,67.92,0,0,1,26.75,26.49Q530,112.84,530,135.7t-10.08,40.2a69.91,69.91,0,0,1-27.3,26.76,78.23,78.23,0,0,1-38.19,9.42A75.35,75.35,0,0,1,416.87,202.66Zm62.25-18.28a47.08,47.08,0,0,0,18.69-18.56q7.13-12.36,7.13-30.12t-7-30.12q-7-12.36-18.29-18.42a52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42T406,135.7q0,18,6.59,30.39t17.62,18.42a49.49,49.49,0,0,0,24.2,6.05A51.72,51.72,0,0,0,479.12,184.38Z" />
                    <path class="cls-1"
                        d="M588.44,205q-14.66-6.58-23-18.29a46.86,46.86,0,0,1-8.61-27h26.09a34.28,34.28,0,0,0,10.89,22.19q9.54,9,27.83,9,17.49,0,27.57-8.74a28.37,28.37,0,0,0,10.09-22.46q0-10.74-5.92-17.48a37.88,37.88,0,0,0-14.79-10.21,231.56,231.56,0,0,0-23.94-7.54q-18.55-4.83-29.71-9.68a47.77,47.77,0,0,1-19.1-15.19q-7.94-10.35-7.93-27.84a48.24,48.24,0,0,1,7.8-27.16,50.8,50.8,0,0,1,21.92-18.28q14.11-6.46,32.4-6.46,26.36,0,43.16,13.18t19,35H655.27Q653.92,57.18,644,49t-26.36-8.2q-15.33,0-25,7.93t-9.68,22.19q0,10.22,5.78,16.67A37.31,37.31,0,0,0,603,97.38q8.47,3.36,23.8,7.66a223.22,223.22,0,0,1,29.86,10.09A49.85,49.85,0,0,1,676,130.46q8.07,10.35,8.07,28.1a49.38,49.38,0,0,1-7.26,25.82q-7.27,12.09-21.52,19.63t-33.62,7.53Q603.1,211.54,588.44,205Z" />
                    <path class="cls-1"
                        d="M746.84,202.66a67,67,0,0,1-26.36-26.76q-9.54-17.34-9.54-40.2,0-22.59,9.81-39.94a67.76,67.76,0,0,1,26.76-26.62q16.95-9.28,37.92-9.28t37.92,9.28a68,68,0,0,1,26.76,26.49q9.81,17.2,9.81,40.07t-10.08,40.2a69.78,69.78,0,0,1-27.3,26.76,78.2,78.2,0,0,1-38.19,9.42A75.38,75.38,0,0,1,746.84,202.66Zm62.26-18.28a47.21,47.21,0,0,0,18.69-18.56q7.11-12.36,7.12-30.12t-7-30.12a45.8,45.8,0,0,0-18.29-18.42,52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42T736,135.7q0,18,6.59,30.39t17.61,18.42a49.52,49.52,0,0,0,24.2,6.05A51.73,51.73,0,0,0,809.1,184.38Z" />
                    <path class="cls-1" d="M916.67,10.65v199H892.2v-199Z" />
                    <path class="cls-1"
                        d="M1089.05,62.28V209.66h-24.47V187.87a47.67,47.67,0,0,1-19.5,17.62,60.3,60.3,0,0,1-27.57,6.32,66.06,66.06,0,0,1-30.92-7.13,51.68,51.68,0,0,1-21.65-21.38Q957,169.05,957,148.61V62.28h24.21v83.1q0,21.78,11,33.48t30.12,11.7q19.64,0,30.93-12.1t11.3-35.23V62.28Z" />
                    <path class="cls-1"
                        d="M1160.31,82.45v86.87q0,10.76,4.58,15.19t15.86,4.44h18v20.71h-22q-20.45,0-30.66-9.42t-10.22-30.92V82.45h-19.09V62.28h19.09V25.17h24.47V62.28h38.46V82.45Z" />
                    <path class="cls-1"
                        d="M1229.16,33.51a16.09,16.09,0,0,1-4.84-11.84,16.08,16.08,0,0,1,4.84-11.83A16.08,16.08,0,0,1,1241,5a15.34,15.34,0,0,1,11.43,4.84,16.33,16.33,0,0,1,4.71,11.83,16.33,16.33,0,0,1-4.71,11.84A15.38,15.38,0,0,1,1241,38.35,16.12,16.12,0,0,1,1229.16,33.51Zm23.67,28.77V209.66h-24.48V62.28Z" />
                    <path class="cls-1"
                        d="M1321.27,202.66a66.9,66.9,0,0,1-26.36-26.76q-9.56-17.34-9.55-40.2,0-22.59,9.82-39.94a67.63,67.63,0,0,1,26.76-26.62q16.93-9.28,37.92-9.28t37.92,9.28a67.92,67.92,0,0,1,26.75,26.49q9.83,17.2,9.82,40.07t-10.08,40.2a69.91,69.91,0,0,1-27.3,26.76,78.23,78.23,0,0,1-38.19,9.42A75.35,75.35,0,0,1,1321.27,202.66Zm62.25-18.28a47.08,47.08,0,0,0,18.69-18.56q7.13-12.36,7.13-30.12t-7-30.12q-7-12.36-18.29-18.42a52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42t-6.73,30.12q0,18,6.59,30.39t17.62,18.42a49.49,49.49,0,0,0,24.2,6.05A51.72,51.72,0,0,0,1383.52,184.38Z" />
                    <path class="cls-1"
                        d="M1582,75.86q16.68,16.27,16.68,46.93v86.87h-24.21V126.29q0-22-11-33.75t-30.12-11.7q-19.36,0-30.8,12.1t-11.42,35.23v81.49h-24.48V62.28h24.48v21a48.52,48.52,0,0,1,19.76-17.48,61.36,61.36,0,0,1,27.57-6.19Q1565.31,59.59,1582,75.86Z" />
                </svg>
            </div>

            <!-- Icona Menu -->


        </div>
        <!---//NavBar-->




        <div class="container-txt">
            <h1><b>Servizi</b></h1>
            <ul>
                <p> Lo studio è specializzato, in proprio ed in collaborazioni con ditte qualificate del settore, in:
                </p>
                <li>Relazione Geologiche;</li>
                <li>Relazione Idrogeologiche;</li>
                <li>Sondaggi Geognostici e Ambientali; </li>
                <li>Prove Penetrometriche Dinamiche Medie (DL30), Pesanti (DPSH) e Superpesanti (SCPT), prove
                    Penetrometriche statiche (CPT)</li>
                <li>Indagini Geofisiche (MASW, HVSR, DOWN HOLE, Sismica a Rifrazione);</li>
                <li>Redazione di Piani di caratterizzazione e Analisi Ambientali Iniziali;</li>
                <li>Piani di Utilizzo delle terre e rocce da scavo;</li>
                <li>Studi di Microzonazione Sismica;</li>
                <li>Prove di Portata su un pozzo;</li>
                <li>Ricerca acqua per realizzazione pozzi;</li>
            </ul>
        </div>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/app.js?versione=<?php echo time(); ?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
            integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
        </script>


    </div>


    <!-- Menu Overlay -->

    <div class="container-md menu-overlay " id="menu">
        <div class="menu-overlay-content">
            <ul id="#menu-down">

                <li><a href="../page-contatti/index.php">Contatti</a></li>
                <li><a href="../page-servizi/index.php">Servizi</a></li>
                <li><a href="../page-portfolio/index.php">Portfolio</a></li>

            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy;2005-2021 All rights reserved. Images and Design by <a href="#">Giovanni</a>
        </div>
    </footer>




</body>

</html>