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

	$query = mysqli_query($connection,"SELECT * FROM qrcode");


	foreach($query as $raw){
		echo"
		<article class='uk-comment uk-comment-primary' role='comment'>
		<header class='uk-comment-header'>
		  <div class='uk-grid-medium uk-flex-middle' uk-grid>
			<div class='uk-width-auto'>
			  <img class='immagine' class='uk-comment-avatar' src='images/{$raw['qrimage']}' width='200' height='300' alt=''>
			</div>
			<div class='uk-width-expand'>

			  <ul class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
				<li><h2><font sice='100px'><strong>{$raw['descrizione']}</strong></font></h2></li>
				<li> <iframe src='./pdf/{$raw['fileDirectory']}' width='600' height='400'></iframe></li>
			  </ul>
			</div>
		  </div>
		</header>
	  </article>
	  <hr class='uk-divider-icon'>
		";





	}

}
?>
