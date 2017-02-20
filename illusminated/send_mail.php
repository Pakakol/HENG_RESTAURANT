<?php 

$contactWorkType = $_POST['contactWorkType'];
$contactName = $_POST['contactName'];
$contactSurname = $_POST['contactSurname'];
$contactTel = $_POST['contactTel'];
$contactEmail = $_POST['contactEmail'];
$contactDetails = $_POST['contactDetails'];

$approve = $_POST['approve'];

$to=$contactEmail;
$subject='ตอบกลับการจ้างงาน';

if ($approve==0) {

	$message='ขอบคุณที่ให้ความสนใจในงานของเรา ทางเราไม่สะดวกที่จะดำเนินงานตามที่ขอได้
	ขออถัยมา ณ ที่นี้ ขอบคุณ';

}else{

	$message='ขอบคุณที่ให้ความสนใจในงานของเรา ทางเราสนใจที่จะร่วมงานกับคุณ
	จะติดต่อกลับภายหลัง ขอบคุณ';
}

mail($to, $subject, $message);


if(!mail) {
	echo "Fail!";
}else{
	echo "success to send";
}



?>