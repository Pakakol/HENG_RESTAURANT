<?php
	define('FPDF_FONTPATH','fonts/');
		require('fpdf/fpdf.php');

		$pdf = new FPDF();
		$pdf->AddFont('thsbn','','thsbn.php');
		$pdf->addFont('thsbn','B','thsbn.php');
		$pdf->Addpage();
		$pdf->SetFont('thsbn','B',24);
		$pdf->Image('images/logo.png',15,20,0);
		$pdf->Text(18,40,iconv('UTF-8', 'cp874', 'ใบรับสินค้า'));
		$pdf->SetFont('thsbn','',16);
		$pdf->Text(18,46,iconv('UTF-8', 'cp874', 'ร้านแอดดิค เปเปอร์'));
		$pdf->Text(18,51,iconv('UTF-8', 'cp874', 'โทร. 032 492 250'));
		//-----------------------------part1------------------------------

		// $pdf->SetXY(100,25);
		// $pdf->cell(50);
		// $pdf->cell(40,10,iconv('UTF-8', 'cp874', 'ส่วนที่1สำหรับผู้สมัคร'),1,0,'C');
		// $pdf->SetFont('thsbn','B',16);
		// $pdf->Text(18,60,iconv('UTF-8','cp874','รายละเอียดสมัคร'));
		//--------------part2-------------------------

		$pdf->SetFont('thsbn','',18);
		$pdf->Text(18,61,iconv('UTF-8','cp874','เลขที่ใบรับงาน: '.$student_ID));
		$pdf->Text(18,67,iconv('UTF-8','cp874','ชื่อ-นามสกุล: '.$name.' '.$surname));
		$pdf->Text(18,73,iconv('UTF-8','cp874','รายละเอียดงาน: '.$type.'ขนาดกระดาษ '.$papersize.'ปริ้นท์ '.$color.'เข้าเล่มแบบ '.$types));
		$pdf->Text(18,79,iconv('UTF-8', 'cp874', 'วันที่รับงาน:สามวันหลังจากส่งไฟล์'));
		// $pdf->Text(18,70,iconv('UTF-8','cp874','ราคา'.$money.'บาท'));
		// $pdf->Text(18,70,iconv('UTF-8','cp874','วัน เดือน ปี ที่รับงาน'.$date));รายละเอียดของงาน &nbsp;<?php echo $type." "."<br>"


		// $pdf->cell(50);
		// $pdf->cell(18,75,iconv('UTF-8', 'cp874', 'CODE:'.$code,1,0,'C');
		//------------------part3---------------------------

		

		$pdf->Output('gen_pdf/addictpaper_'.$student_ID.'.pdf','F');


?>