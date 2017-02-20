<?php
	require './connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="iewport" content="width=device-width,initial-scale-1">
	<title>แบบฟอร์มการรับสมัคร</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>
</head>
<body>
<div class="container-fluid">
	
<?php

	require './connect.php';

	$gpax = $_POST['gpax'];
	$gat = $_POST['gat'];
	$pat1 = $_POST['pat1'];
	$pat2 = $_POST['pat2'];

	$gpax;
	$gat;
	$pat1;
	$pat2;

	$onet1 = $_POST['onet1'];
	$onet2 = $_POST['onet2'];
	$onet3 = $_POST['onet3'];
	$onet4 = $_POST['onet4'];
	$onet5 = $_POST['onet5'];
	$onet6 = $_POST['onet6'];
	$onet7 = $_POST['onet7'];
	$onet8 = $_POST['onet8'];


	$hsum1 = $_POST['hsum1'];
	$hsum2 = $_POST['hsum2'];
	$hsum3 = $_POST['hsum3'];



	$major1 = $_POST['major1'];
	$major2 = $_POST['major2'];
	$major3 = $_POST['major3'];


	
		if ($major1!="mini1" && $major2 =="null2" && $major3 =="null3")
		{
			$money ="500 (ห้าร้อยบาท)";
		}
		else if ($major1!="mini1" && $major2!="null2" && $major3 =="null3")
		{
			$money ="600 (หกร้อยบาท)";
		}
		else if ($major1!="mini1" && $major2=="null2" && $major3 !="null3")
		{
			$money ="600 (หกร้อยบาท)";
		}
		else if ($major1!="mini1" && $major2!="null2" && $major3 !="null3")
		{
			$money ="700 (เจ็ดร้อยบาท)";
		}


		switch ($major1) {
			case 1:
				$textmajor1 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม)";
				break;
			case 2:
				$textmajor1 ="สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ";
				break;
			case 3:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 4:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 5:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 6:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 7:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 8:
				$textmajor1 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 9:
				$textmajor1 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน)";
				break;
			case 10:
				$textmajor1 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ)";
				break;
			
			default:
				$textmajor1 ="ไม่เลือกสาขาที่ 1";
				break;
		}


		switch ($major2) {
			case 1:
				$textmajor2 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม)";
				break;
			case 2:
				$textmajor2 ="สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ";
				break;
			case 3:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 4:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 5:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 6:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 7:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 8:
				$textmajor2 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 9:
				$textmajor2 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน)";
				break;
			case 10:
				$textmajor2 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ)";
				break;
			
			default:
				$textmajor1 ="ไม่เลือกสาขาที่ 1";
				break;
		}


		switch ($major3) {
			case 1:
				$textmajor3 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม)";
				break;
			case 2:
				$textmajor3 ="สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ";
				break;
			case 3:
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 4:
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 5: 
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 6: 
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 7:
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์)";
				break;
			case 8:
				$textmajor3 ="สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1)";
				break;
			case 9:
				$textmajor3 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน)";
				break;
			case 10:
				$textmajor3 ="สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ)";
				break;
			
			default:
				$textmajor1 ="ไม่เลือกสาขาที่ 1";
				break;
		}

		





	$sex = $_POST['sex'];
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$nation = $_POST['nation'];
	$citizen = $_POST['citizen'];
	$reli = $_POST['reli'];
	$id_card = $_POST['id_card'];

	$graduate = $_POST['graduate'];
	$school = $_POST['school'];
	$province_school = $_POST['province_school'];
	$district_school = $_POST['district_school'];



	$strSql="INSERT INTO id233_alldetail (
		major1,
		major2,
		major3,
		ntitle,
		fname,
		lname,
		age,
		nation,
		citizen,
		religion,
		id_card,
		graduate,
		school,
		province_school,
		district_school,
		gpax,
		gat,
		pat1,
		pat2,
		onet1,
		onet2,
		onet3,
		onet4,
		onet5,
		onet6,
		onet7,
		onet8,
		sum1,
		sum2,
		sum3) VALUES(

		'$major1',
		'$major2',
		'$major3',
		'$sex',
		'$fname',
		'$lname',
		'$age',
		'$nation',
		'$citizen',
		'$reli',
		'$id_card',
		'$graduate',
		'$school',
		'$province_school',
		'$district_school',
		'$gpax',
		'$gat',
		'$pat1',
		'$pat2',
		'$onet1',
		'$onet2',
		'$onet3',
		'$onet4',
		'$onet5',
		'$onet6',
		'$onet7',
		'$onet8',
		'$hsum1',
		'$hsum2',
		'$hsum3')";

	$strQuery=mysqli_query($objConnect,$strSql);



	if (!$strQuery) { 

		echo "insert error";
	}
	else {

		$strSql2 ="SELECT id_payment,id_card, addtime FROM id233_alldetail WHERE id_card='$id_card' ORDER BY addtime DESC LIMIT 0,1";

		$strQuery2 = mysqli_query($objConnect,$strSql2);

		while ($rows = mysqli_fetch_array($strQuery2)) {

			$id_payment = $rows['id_payment'];
			$id_card = $rows['id_card'];
			$addtime = $rows['addtime'];
			

				// echo "ระบบได้ทำการบันทึกข้อมูลเรียบร้อยแล้ว";
				// echo "เลขที่ใบสมัคร".$id_payment = $rows['id_payment']."<br>";
				// echo "<br>";
				// echo "เลขประจำตัวประชาชน".$id_card = $rows['id_card'];
				// echo "ลำดับการสมัครของคุณคือ";

				// echo "major1".$textmajor1."<br>";
				// echo "major2".$textmajor2."<br>";
				// echo "major3".$textmajor3."<br>";
		}
	}


		include 'genpdf.php'


?>

	<div class="row text-center">
			<div class="col-md-12 head-line"></div>
					<div class="col-md-12">
						<h1 class="text-center">ใบสมัครสอบคัดเลือกบุคคลเพื่อเข้าศึกษาด้วยวิธีพิเศษ (รับตรง)</h1>
						<h5 class="text-center">คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2558</h5>
					</div>
	</div><!--END ROW-->

	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 head-dot"></div>
			<div class="col-md-12">
				<h4>ระบบบันทึกข้อมูลของ</h4>

				<h3><?php echo $sex." ".$fname." ".$lname."<br>";?></h3>
				<h4><?php echo $id_card."<br>";?></h4>

				เลขที่่ใบสมัคร <br>

				<?php echo $id_payment; ?><br>

				ลำดับการสมัคร<br>

				<?php echo $textmajor1."<br>";?>
				<?php echo $textmajor2."<br>";?>
				<?php echo $textmajor3."<br>";?>

				คะแนนที่ยื่นสมัคร<br>

				คะแนนรวม สำหรับสาขาเทคโนโลยีสารสนเทศธุรกิจ และสาขาเทคโนโลยีสารสนเทศเพื่อการออกแบบ ยื่นคะแนน <?php echo $hsum1 ?> คะแนน <br>
				คะแนนรวม สำหรับสาขานิเทศศาสตร์ พื้นฐานวิทยาศาสตร์ ยื่นคะแนน <?php echo $hsum2 ?> คะแนน <br>
				คะแนนรวม สำหรับสาขานิเทศศาสตร์ พื้นฐานศิลปศาสตร์ รูปแบบที่ 1 ยื่นคะแนน <?php echo $hsum3 ?> คะแนน <br>


				<h4>วันเวลา</h4>

					<h3><?php echo $addtime ?></h3><br>




				


				
			</div>

			<div class="row space-top btn-position text-center">
	  			
	  			<!--<a href="savefile.php?id_payment=<?=$id_payment?>" class="btn btn-primary btn-lg">ดาวน์โหลดใบชำระเงิน</a>-->

	  			<a href="gen_pdf/ict_admissions_<?=$id_payment;?>.pdf" target="_blank" class="btn btn-primary btn-lg">ดาวน์โหลดใบชำระเงิน</a>

	  			<br>
	  			กรุณาดาวน์โหลดใบชำระเงิน ก่อนปิดหน้านี้ หากปิดหน้านี้ไปแล้วจะไม่สามารถดาวน์โหลดได้อีกครั้ง<br>
	  			</div>

	  				<h4 class="text-center">โปรดชำระเงินภายใน</h4><br>
	  				18.00 น. ของวันที่ 24 มิถุนายน 2558<br>

	  				<div class="col-md-12 head-dot"></div>
	  				<h5 class="text-center">คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร</h4><br>
	  				



					</div>
		</div>
</div><!-- end div row 2 -->

		</div><!--END ROW 1-->
</div>
</div><!--container-fluid-->

</body>
</html>