



<?php





//$qrtext=descrizione
function CreateQR($descrizione,$NameFile){
	require_once 'connection.php';
	require_once 'phpqrcode/qrlib.php';

$puntamento="http://10.108.102.96/pdf/".$NameFile;


	$path = 'images/';
	$qrcode = $path.$NameFile.".png";
	$qrimage = $NameFile.".png";
	
	if(isset($_POST['sbt-btn']))

	{
		$query = mysqli_query($connection,"insert into qrcode set qrtext='$puntamento', qrimage='$qrimage',descrizione='$descrizione',fileDirectory='$NameFile'");
		if($query)
		{
			?>
			<script>
				alert("QR CODE - Generato correttamente");
			</script>
			<?php
		}
	}


	
	QRcode :: png($puntamento, $qrcode, 'H',4 , 4);
}





function estraiQrCode(){
	require_once 'connection.php';
	require_once 'phpqrcode/qrlib.php';
	if(isset($_POST['cancella'])){
		$query = mysqli_query($connection,"DELETE FROM qrcode WHERE id='{$_POST['seleziona']}'");
	}




	$query = mysqli_query($connection,"SELECT * FROM qrcode");


	foreach($query as $raw){
		echo"
		<form method='post' enctype='multipart/form-data'>
		<article class='uk-comment uk-comment-primary' role='comment'>
		<header class='uk-comment-header'>
		  <div class='uk-grid-medium uk-flex-middle' uk-grid>
			<div class='uk-width-auto'>
			  <img class='immagine' class='uk-comment-avatar' src='images/{$raw['qrimage']}' width='200' height='300' alt=''>
			</div>
			<div class='uk-width-expand'>

			  <ul class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
				<li><h2><font sice='100px'><strong>{$raw['descrizione']}</strong></font></h2></li>
				<li> <iframe src='./pdf/{$raw['fileDirectory']}' width='500' height='300'></iframe></li>
				<li><button type='submit' name='cancella' value='cancella' class='uk-button uk-button-danger'><font color='black'>Delete</font></button></li>
				<li><input type='hidden' name='seleziona' value='{$raw['id']}'></li>
			  </ul>
			</div>
		  </div>
		</header>
	  </article>
	  </form>
	  <hr class='uk-divider-icon'>
		";





	}

}






function estraiQrCodePerModifica(){

	require_once 'connection.php';
	require_once 'phpqrcode/qrlib.php';

	if(isset($_POST['edit'])){
		
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

    EditQR($_POST['descrizione'],$pdfDaVisualizzare,$_POST['mod']);
	}





	$query = mysqli_query($connection,"SELECT * FROM qrcode");


	foreach($query as $raw){
		echo"
		<form method='post' enctype='multipart/form-data'>
		<article class='uk-comment uk-comment-primary' role='comment'>
		<header class='uk-comment-header'>
		  <div class='uk-grid-medium uk-flex-middle' uk-grid>
			<div class='uk-width-auto'>
			  <img class='immagine' class='uk-comment-avatar' src='images/{$raw['qrimage']}' width='200' height='300' alt=''>
			</div>
			<div class='uk-width-expand'>

			  <ul class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
				<li><h2><font sice='100px'><strong>{$raw['descrizione']}</strong></font></h2></li>
				<li> <iframe src='./pdf/{$raw['fileDirectory']}' width='300' height='200'></iframe></li>
				<li><button type='submit' name='edit' value='edit' class='uk-button uk-button-primary'><font color='black'>Edit</font></button></li>
				<li><input type='hidden' name='mod' value='{$raw['id']}'></li>
			  </ul>
			</div>
			
			<fieldset class='uk-fieldset'>

			<legend class='uk-legend'>MODIFICA QR-CODE</legend>
			<div class='uk-margin'>
				<input class='uk-input' type='text' placeholder='Inserisci Numero' name='descrizione'aria-label='Input' required data-parsley-pattern='^[a-zA-Z]+$' data-parsley-trigger='keyup'>
			</div>
	<input type='file' name='file' required>
	

<progress id='js-progressbar' class='uk-progress' value='0' max='100' hidden></progress>
		</fieldset>









		  </div>
		</header>
	  </article>
	  </form>
	  <hr class='uk-divider-icon'>
		";





	}
}





function EditQR($descrizione,$NameFile,$id){
	$server = "localhost";
$username = "root";
$password = "";
$database = "college_db";
$connection = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
	echo("connection terminated");
}

$puntamento="http://10.108.102.96/pdf/".$NameFile;


	$path = 'images/';
	$qrcode = $path.$NameFile.".png";
	$qrimage = $NameFile.".png";
	
	if(isset($_POST['mod'])){//fare update poi la parte admin è finita


		$query = mysqli_query($connection,"UPDATE qrcode SET qrtext='$puntamento', qrimage='$qrimage',descrizione='$descrizione',fileDirectory='$NameFile' WHERE id='{$id}'");
		if($query)
		{
			?>
			<script>
				alert("QR CODE - Aggiornato correttamente");
			</script>
			<?php
		}
	}


	
	QRcode :: png($puntamento, $qrcode, 'H',4 , 4);
}



function estraiQrCodePerStampa(){
	require('.\libreriaPDF\pdf\fpdf.php');
	require_once 'connection.php';
	require_once 'phpqrcode/qrlib.php';


	if(isset($_POST['print'])){
		$infoQuery = mysqli_query($connection,"SELECT * FROM qrcode WHERE id='{$_POST['print']}'");
		foreach($infoQuery as $raw){
			$pathimage="images/".$raw['qrimage'];
			$immagine = $pathimage; // Percorso dell'immagine



	// Create a new PDF object
$pdf = new FPDF();

// Add a new page to the PDF
$pdf->AddPage();

// Load the image and position it on the PDF
$pdf->Image($immagine, 10, 10, 100, 100);

// Create a container for the image and text (Optional)
echo '<div class="image-container">'; // Add this line if using HTML/CSS
$descrizione=$raw['descrizione'];
// Add the text with "Hello" next to the image
$pdf->SetTextColor(0, 0, 0); // Set text color to black
$pdf->SetFont('Arial', 'B', 12); // Set font to Arial bold 12pt
$pdf->SetXY(170, 30); // Set text position (X: 170 from left, Y: 30 from top)
$pdf->Cell(0, 10, $descrizione, 0, 0, 'L'); // Write the text

// Generate the PDF
$pdf->Output('immagine.pdf', 'F');

echo '<script>window.open("immagine.pdf", "_blank");</script>'; // Open the PDF in a new tab (Optional)

// Add the closing div tag (Optional)
echo '</div>'; // Add this line if using HTML/CSS
		}
	}

	


	$query = mysqli_query($connection,"SELECT * FROM qrcode");


	foreach($query as $raw){
		echo"
		<form method='post' enctype='multipart/form-data'>
		<article class='uk-comment uk-comment-primary' role='comment'>
		<header class='uk-comment-header'>
		  <div class='uk-grid-medium uk-flex-middle' uk-grid>
			<div class='uk-width-auto'>
			  <img class='immagine' class='uk-comment-avatar' src='images/{$raw['qrimage']}' width='200' height='300' alt=''>
			</div>
			<div class='uk-width-expand'>

			  <ul class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
				<li><h2><font sice='100px'><strong>{$raw['descrizione']}</strong></font></h2></li>
				<li> <iframe src='./pdf/{$raw['fileDirectory']}' width='300' height='200'></iframe></li>
				<li><button type='submit' name='stampa' value='stampa' class='uk-button uk-button-primary'><font color='black'>Stampa</font></button></li>
				<li><input type='hidden' name='print' value='{$raw['id']}'></li>
			  </ul>
			</div>
			
			<fieldset class='uk-fieldset'>

<progress id='js-progressbar' class='uk-progress' value='0' max='100' hidden></progress>
		</fieldset>
		  </div>
		</header>
	  </article>
	  </form>
	  <hr class='uk-divider-icon'>
		";





	}
}
?>
