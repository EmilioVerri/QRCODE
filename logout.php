<?php
session_start();
?>


<?php

if ($_SESSION['logged_in']==false) {
  header('Location: index.php');
  exit();
}?>


<?php

include "./puntamento.php";

$redirect=puntamento();

session_destroy();
$redirectURL = $redirect."/index.php";

            header("Location: $redirectURL");
            $_SESSION['logged_in'] = false;
            session_destroy();
            exit();

?>