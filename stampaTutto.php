<?php
session_start();
?>

<?php

if ($_SESSION['logged_in']==false) {
  header('Location: index.php');
  exit();
}?>









<html>

<?php 

include "./qrcode.php";

?>

<head>

        <title>Qr Generation Form</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>

<body class="uk-background-muted uk-padding uk-panel">
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="#">Amministratore</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="amministratore.php">CREA-QR</a></li>
                                    <li><a href="modificaqr.php">MODIFICA-QR</a></li>
                                    <li><a href="rimuoviQR.php">RIMUOVI-QR</a></li>
                                    <li><a href="stampaQRCode.php">STAMPA-QR</a></li>
                                    <li class="uk-active"><a href="stampaTutto.php">STAMPA-TUTTI-QR</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <div class="uk-container uk-background-muted uk-padding uk-panel">
    

    <h1><span class="uk-text-background">Estrai tutti i QR-CODE:</span></h1><br>
    <form method="post">
    <button type='submit' name='stampaTUTTO' value='stampaTUTTO' class='uk-button uk-button-primary'><font color='black'>Stampa Tutto</font></button>
    </form>
    <?php estraiQrCodePerStampaMULTIPLA();?>

    </div>



    <div class="uk-position-top-right uk-overlay uk-overlay-default"><img class='uk-comment-avatar' src='./images/logo.png' width='200' height='300' alt=''></div>
   

</html>