<?php

	$fullname = $sex.$fname." ".$lname;

	define('FPDF_FONTPATH', 'fonts/');
		require('fpdf/fpdf.php');

		$pdf = new FPDF();
		$pdf->Addfont('thsbn','','thsbn.php');
		$pdf->Addfont('thsbn','B','thsbn.php');
		$pdf->Addpage();
		$pdf->SetFont('thsbn','B',24);
		$pdf->image('img/logo.png',15,20,0);
		$pdf->Text(43,30,iconv('UTF-8','cp874', 'โครงการรับนักศึกาาด้วยวิธีพิเศษ(รับตรง)'));
		$pdf->SetFont('thsbn','',16);
		$pdf->Text(43,36,iconv('UTF-8','cp874', 'คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร'));
		$pdf->Text(43,41,iconv('UTF-8','cp874', 'ปีการศึกษา 2558'));

		//-----part1-----------

		$pdf->SetXY(100,25);
		$pdf->cell(50);
		$pdf->cell(40,10,iconv('UTF-8','cp874', 'ส่วนที่1 สำหรับผู้สมัคร'),1,0,'C');
		$pdf->SetFont('thsbn','B',16);
		$pdf->Text(18,60,iconv('UTF-8','cp874', 'รายละเอียดการสมัคร'));

		//------part2----------

		$pdf->SetFont('thsbn','',14);
		$pdf->Text(18,65,iconv('UTF-8','cp874', 'ชื่อ-นามสกุล:'.$fullname.'เลชที่ใบสมัคร'.$id_payment));

		$pdf->Text(18,70,iconv('UTF-8','cp874', 'เลขประจำตัวประชาชน:'.$id_card.' ค่าสมัคร:'.$money));

		//------part3----------

		$pdf->SetFont('thsbn','',12);
		$pdf->Text(18,75,iconv('UTF-8','cp874', 'สมัคร:อันดับ 1'.$textmajor1));
		$pdf->Text(18,80,iconv('UTF-8','cp874', 'สมัคร:อันดับ 2'.$textmajor2));
		$pdf->Text(18,85,iconv('UTF-8','cp874', 'สมัคร:อันดับ 3'.$textmajor3));


		//------part4-------------

		$pdf->Text(25,90,iconv('UTF-8','cp874', 'คะแนนสำหรับสาขาเทคโนโลยีสารสนเทศธุรกิจและออกแบบ ยื่นคะแนน 20830 คะแนน '));
		$pdf->Text(25,95,iconv('UTF-8','cp874', 'คะแนนสำหรับสาขานิเทศศาสตร์ พื้นฐานวิทยาศาสตร์ ยื่นคะแนน 18830 คะแนน  '));
		$pdf->Text(25,100,iconv('UTF-8','cp874', 'คะแนนสำหรับสาขานิเทศศาสตร์ พื้นฐานศิลปศาสตร์ ยื่นคะแนน 20830 คะแนน  '));




		$pdf->Output('gen_pdf/ict_admissions_'.$id_payment.'.pdf','F');
?>