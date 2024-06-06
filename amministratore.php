<html>

<head>
<?php
include "qrcode.php";



if(isset($_POST['sbt-btn'])){

///////////////////////////////// INIZIO UPLOAD FILE PDF ////////////////////

   // Process the uploaded file
   if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileName = $_POST['descrizione'].".pdf";
    $tmpFilePath = $_FILES['file']['tmp_name'];

    // Validate file extension (ensure it's a PDF)
    $allowedExtensions = array('pdf');
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
        echo 'Invalid file extension. Only PDF files are allowed.';
        exit;
    }

    // Sanitize the filename (remove any special characters)
    $sanitizedFileName = preg_replace('/[^a-zA-Z0-9-_.]/', '', $fileName);

    // Construct the new file path in the upload directory
    $uploadDirectory = './pdf/'; // Replace with your actual directory path
    $newFilePath = $uploadDirectory . $sanitizedFileName;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
       // echo 'PDF file uploaded and moved successfully.';
    } else {
      //  echo 'Error uploading the PDF file.';
    }
} else {
    // Handle no file uploaded or upload error scenario
    if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
      //  $errorMessage = 'An error occurred during file upload. Error code: ' . $_FILES['file']['error'];
    } else {
       // $errorMessage = 'No PDF file uploaded.';
    }
    //echo $errorMessage;
}


///////////////////////////////// FINE UPLOAD FILE PDF ////////////////////

//$fileName = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
$pdfDaVisualizzare=$_POST['descrizione'].".pdf";

    CreateQR($_POST['descrizione'],$pdfDaVisualizzare);
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
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="uk-active">
                            <a href="#">Amministratore</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">CREA-QR</a></li>
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


        <form method="post" enctype="multipart/form-data">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Crea QR-CODE</legend>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Inserisci Numero Procedura (senza spazi)" name="descrizione"
                        aria-label="Input" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
                </div>
        <input type="file" name="file" required>
        

<progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>




<div class="uk-margin" uk-margin>
                    <input type="submit" name="sbt-btn" value="QR Generate" class="uk-button uk-button-default" />
                </div>





            </fieldset>
        </form>

    </div>




    <div class="uk-position-bottom-right uk-overlay uk-overlay-default"><img class='uk-comment-avatar' src='./images/logo.png' width='200' height='300' alt=''></div>
</body>

</html>