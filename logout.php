<?php
session_start();
?>

<?php

if ($_SESSION['logged_in']==false) {
  header('Location: index.php');
  exit();
}?>


<?php

session_destroy();
$redirectURL = "http://10.108.102.96/index.php";

            header("Location: $redirectURL");
            $_SESSION['logged_in'] = false;
            session_destroy();
            exit();

?>