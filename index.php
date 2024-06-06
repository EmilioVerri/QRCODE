<html>

<?php 

include "./qrcode.php";
?>

<head>
    <html>

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
                        <li class="uk-active"><a href="index.php">Home</a></li>
                        <li class="uk-active">
                            <a href="#">Amministratore</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="amministratore.php">CREA-QR</a></li>
                                    <li><a href="modificaqr.php">MODIFICA-QR</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <div class="uk-container uk-background-muted uk-padding uk-panel">

    <?php estraiQrCode();?>

    </div>




    <div class="uk-position-bottom-right uk-overlay uk-overlay-default"><img class='uk-comment-avatar' src='./images/logo.png' width='200' height='300' alt=''></div>
</body>

</html>