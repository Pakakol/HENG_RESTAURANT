<?php
	$id_payment = $_GET['id_payment'];

	$getfile="gen_pdf/ict_admissions_".$id_payment.".pdf";

	if(file_exists($getfile)){

		header('Content-Description: File Transfer');

		header('Content-Type: application/octet-stream');

		header('Content-Disposition: attachment; filename='. basename($getfile));

		header('Expires:0');

		header('Cache-Control: mus-revalidate');
		header('Pragma: public');
		header('Content-length:'.filesize($getfile));
		ob_clean();
		flush();
		readfile($getfile);
		exit;
	}

?>