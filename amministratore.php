<html>

<head>
    <!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css/">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    -->



    <!--
    <title>Qr Generation Form</title>  


    <link rel="stylesheet" type="text/css" href="css/uikit-rtl.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit-rtl.min.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit.min.css/">
    <script src="js/uikit-icons.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/uikit.js"></script>
    <script src="js/uikit.min.js"></script>
</head>
<body>  
  <div class="container">          
   <div class="table-responsive">  
    <h3 align="center">QR Generation Form</h3><br/>
    <div class="box">
     <form method="post" action="qrcode.php" > 
      <div class="form-group">
         <label>QR Text</label>
         <input type="text" name="qrtext" id="qrtext" placeholder="Enter QR Text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="sbt-btn" value="QR Generate" class="btn btn-success" />
      </div>
     </form>
    </div>
   </div>  
  </div>
 </body>  
</html>  -->


<?php
include "qrcode.php";



if(isset($_POST['sbt-btn'])){

///////////////////////////////// INIZIO UPLOAD FILE PDF ////////////////////

   // Process the uploaded file
   if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileName = $_FILES['file']['name'];
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


    //genera qr
    //CreateQR($_POST['qrtext'],$_POST['file']);
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
                                    <li class="uk-active"><a href="#">Home Amministratore</a></li>
                                    <li><a href="qrpresenti.php">QR PRESENTI</a></li>
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
                    <input class="uk-input" type="text" placeholder="Inserisci un nome tutto attaccato" name="qrtext"
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





</body>

</html>