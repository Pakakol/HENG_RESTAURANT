<?php
	$student_ID = $_GET['student_ID'];

	$getfile="gen_pdf/addictpaper_".$student_ID.".pdf";

	if(file_exists($getfile)){

		header('Content-Description: File Transfer');

		header('Content-Type: application/octet-stream');

		header('Content-Disposition: attachment; filename='. basename($getfile));

		header('Expires:0');

		header('Cache-Control: mus-revalidate');
		header('Pragma: public');
		header('Content-Length:'.filesize($getfile));
		ob_clean();
		flush();
		readfile($getfile);
		exit;
	}

?>