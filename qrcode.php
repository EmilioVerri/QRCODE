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
		$query = mysqli_query($connection,"insert into qrcode set qrtext='$puntamento', qrimage='$qrimage',descrizione=''");
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

?>
