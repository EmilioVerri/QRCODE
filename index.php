<?php
session_start();
?>

<?php


if (isset($_POST['login'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "college_db";
    $connection = mysqli_connect("$server", "$username", "$password");
    $select_db = mysqli_select_db($connection, $database);
    if (!$select_db) {
        echo ("connection terminated");
    }
    $query = mysqli_query($connection, "SELECT * FROM amministratore WHERE id='1'");
    foreach($query as $raw){


        if ($_POST['Username'] == $raw['user'] && $_POST['Password'] == $raw['password']) {
            ?>
            <script>
                alert("Username o Password sbagliati");
            </script>
            <?php




            
            $_SESSION['logged_in'] = true;

            
            $redirectURL = "http://10.108.102.96/amministratore.php";

            header("Location: $redirectURL");

            exit();


        } else {
            ?>
            <script>
                alert("Username o Password sbagliati");
            </script>
            <?php
        }
    }

     
    }




?>

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

    <div class="uk-container uk-background-muted uk-padding uk-panel">

        <h1><span class="uk-text-background">LOGIN QR-CODE</span></h1>
        <br>
        <form method="post">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Inserisci le Credenziali</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="text" name="Username" placeholder="Username" aria-label="Input" required>
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="password" name="Password" placeholder="Password" aria-label="Input" required>
                </div>

                <button type="submit" name="login" class="uk-button uk-button-primary">Primary</button>

            </fieldset>
        </form>




    </div>
    <div class="uk-position-top-right uk-overlay uk-overlay-default"><img class='uk-comment-avatar'
            src='./images/logo.png' width='200' height='300' alt=''></div>
    <div class="uk-position-bottom-right uk-overlay uk-overlay-default"><img class='uk-comment-avatar'
            src='./images/logo.png' width='200' height='300' alt=''></div>
</body>

</html>