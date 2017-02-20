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
	<div class="row">
		<div class="col-md-12 head-line"></div>
		<div class="col-md-12">
			<h1 class="text-center">ใบสมัครสอบคัดเลือกบุคคลเพื่อเข้าศึกษาด้วยวิธีพิเศษ (รับตรง)</h1>
			<h5 class="text-center">คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2558</h5>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 head-dot"></div>
			<div class="col-md-12">
				<h4 class="text-center">รายละเอียดข้อมูลในการสอบวัดความรู้ทางการศึกษาแห่งชาติ ของผู้สมัคร</h4>
				<ol class="space-top"><b>หมายเหตุ</b>
					<li>ระบบจะคำนวณคะแนนให้โดยอัตโนมัติ หากคะแนนไม่ผ่านเกณฑ์ขั้นต่ำ ระบบจะไม่รับสมัคร</li>
					<li>คะแนนที่กรอกต้องเป็นคะแนนที่ได้รับจริง และผู้สมัครต้องรับผิดชอบข้อมูลที่กรอก หากตรวจสอบพบภายหลังว่าคะแนนไม่ถูกต้อง ถือว่านักศึกษามีเจตนาทุจริต มีผลทำให้พ้นสภาพนักศึกษา</li>
					<li>สามารถเลือกใช้คะแนนที่ดีที่สุด จากคะแนนสอบคนละรอบได้ แต่ต้องเป็นคะแนนของปีเดียวกัน ห้ามใช้คะแนนข้ามปี และต้องมีหลักฐานจากการสำเนาจากเว็บไซต์ที่แสดงคะแนนจาก สทศ. หรือ สอท. มาแสดงในวันที่สอบสัมภาษณ์</li>
				</ol>
			</div>
		</div><!--end row1-->

		<form action="complete.php" method="post" onsubmit="return Validate()">

		<div class="row">
			<h5 class="text-left text-title">GPAX , GPA , PAT1 , PAT2</h5>
			<div class="col-md-12 head-dot"></div> 

			<div class="col-md-3 form-inline">
				<label class="col-md-3 text-title">GPAX</label>
				<input type="text" name="gpax" id="gpax" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-3 text-title">GAT</label>
				<input type="text" name="gat" id="gat" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-3 text-title">PAT1</label>
				<input type="text" name="pat1" id="pat1" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-3 text-title">PAT2</label>
				<input type="text" name="pat2" id="pat2" class="form-control" size="10" onblur="Calculate()">
			</div>

		</div><!--end row2-->

		<div class="row">
			<h5 class="text-left text-title">O-NET</h5>
			<div class="col-md-12 head-dot"></div>

			<div class="col-md-3 form-inline">
				<label class="col-md-6 text-title">01ภาษาไทย</label>
				<input type="text" name="onet1" id="onet1" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-6 text-title">02สังคม</label>
				<input type="text" name="onet2" id="onet2" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-6 text-title">03คณิตศาสตร์</label>
				<input type="text" name="onet3" id="onet3" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline">
				<label class="col-md-6 text-title">04ภาษาอังกฤษ</label>
				<input type="text" name="onet4" id="onet4" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline space-a">
				<label class="col-md-6 text-title">05วิทยาศาสตร์</label>
				<input type="text" name="onet5" id="onet5" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline space-a">
				<label class="col-md-6 text-title">06สุขศึกษา</label>
				<input type="text" name="onet6" id="onet6" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline space-a">
				<label class="col-md-6 text-title">07ศิลปะ</label>
				<input type="text" name="onet7" id="onet7" class="form-control" size="10" onblur="Calculate()">
			</div>

			<div class="col-md-3 form-inline space-a">
				<label class="col-md-6 text-title">08การงานฯ</label>
				<input type="text" name="onet8" id="onet8" class="form-control" size="10" onblur="Calculate()">
			</div>

		</div><!--END row3-->

		<div class="row space-top">
			<div class="col-md-12 form-inline">
				<label class="col-md-7">คะแนนรวม สำหรับสาขาเทคโนโลยีสารสนเทศธุรกิจ และสาขาเทคโนโลยีสารสนเทศเพื่อการออกแบบ ขั้นต่ำ 10000 คะแนน
				</label>
				<input type="text" name="sum1" id="sum1" class="form-control" disabled="disabled">
				<input type="hidden" name="hsum1" id="hsum1">
			</div>

			<div class="col-md-12 form-inline">
				<label class="col-md-7">คะแนนรวม สำหรับสาขานิเทศศาสตร์ พื้นฐานวิทยาศาสตร์ ขั้นต่ำ 18000 คะแนน
				</label>
				<input type="text" name="sum2" id="sum2" class="form-control" disabled="disabled">
				<input type="hidden" name="hsum2" id="hsum2">
			</div>

			<div class="col-md-12 form-inline space-a">
				<label class="col-md-7">คะแนนรวม สำหรับสาขานิเทศศาสตร์ พื้นฐานศิลปศาสตร์ รูปแบบที่ 1 ขั้นต่ำ 18000 คะแนน
				</label>
				<input type="text" name="sum3" id="sum3" class="form-control" disabled="disabled">
				<input type="hidden" name="hsum3" id="hsum3">
			</div>

		</div><!--END row4-->

		<div class="row space-top">
			<div id="load-select">
			<h5 class="text-left text-title">สาขาวิชา(จะแสดงสาขาวิชาตามคะแนนขั้นต่ำของผู้สมัคร)
			</h5>
			<div class="col-md-12 head-dot"></div>

			<div class="col-md-10 form-inline">
				<label class="col-md-2">สาขาที่สมัคร</label>
				อันดับที่ 1 (เลือก 1 อันดับ ค่าธรรมเนียม 500 บาท)
				<select class="form-control" name="major1" id="major1" disabled="disabled">
					<option value="mini1">คะแนนไม่ถึงขั้นต่ำ</option>
					<option value="1">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม) ขั้นต่ำ 10000 คะแนน</option>
					<option value="2">สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ ขั้นต่ำ 10000 คะแนน</option>
					<option value="3">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="4">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="5">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="6">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="7">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="8">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="9">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน) ขั้นต่ำ 10000 คะแนน</option>
					<option value="10">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ) ขั้นต่ำ 10000 คะแนน</option>
				</select>
			</div>


			<div class="col-md-10 form-inline space-top">
				<label class="col-md-2">สาขาที่สมัคร</label>
				อันดับที่ 2 (เลือก 2 อันดับ ค่าธรรมเนียม 600 บาท)
				<select class="form-control" name="major2" id="major2" disabled="disabled">
					<option value="mini2">คะแนนไม่ถึงขั้นต่ำ</option>
					<option value="null2">ไม่เลือกอันดับ2</option>
					<option value="1">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม) ขั้นต่ำ 10000 คะแนน</option>
					<option value="2">สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ ขั้นต่ำ 10000 คะแนน</option>
					<option value="3">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="4">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="5">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="6">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="7">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="8">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="9">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน) ขั้นต่ำ 10000 คะแนน</option>
					<option value="10">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ) ขั้นต่ำ 10000 คะแนน</option>
				</select>

			</div>


			<div class="col-md-10 form-inline space-top">
				<label class="col-md-2">สาขาที่สมัคร</label>
				อันดับที่ 3 (เลือก 3 อันดับ ค่าธรรมเนียม 700 บาท)
				<select class="form-control" name="major3" id="major3" disabled="disabled">
					<option value="mini3">คะแนนไม่ถึงขั้นต่ำ</option>
					<option value="null3">ไม่เลือกอันดับ2</option>
					<option value="1">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเกม) ขั้นต่ำ 10000 คะแนน</option>
					<option value="2">สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ ขั้นต่ำ 10000 คะแนน</option>
					<option value="3">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="4">สาขาวิชานิเทศศาสตร์ (การโฆษณา) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="5">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="6">สาขาวิชานิเทศศาสตร์ (ภาพยนตร์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="7">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานวิทยาศาสตร์) ขั้นต่ำ 18000 คะแนน</option>
					<option value="8">สาขาวิชานิเทศศาสตร์ (วิทยุโทรทัศน์) (พื้นฐานศิลปศาสตร์ รูปแบบ 1) ขั้นต่ำ 18000 คะแนน</option>
					<option value="9">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบแอนนิเมชัน) ขั้นต่ำ 10000 คะแนน</option>
					<option value="10">สาขาวิชาเทคโนโลยีสารสนเทศเพื่อการออกแบบ(การออกแบบเว็บและสื่อโต้ตอบ) ขั้นต่ำ 10000 คะแนน</option>
				</select>						
			</div>
			<div class="col-md-10 form-inline space-top">
				<label class="col-md2">ก่อนสมัคร โปรดศึกษาระเบียบการรับสมัครสอบคัดเลือกฯ อย่างละเอียดถี่ถ้วน</label>
			</div>
		</div><!---END LOAD-SELECT-->
		</div><!--END row5-->

		<div class="row space-top">
			<h4 class="text-center text-title">ข้อมูลส่วนตัว</h4>
			<div class="col-md-12 head-dot"></div>
			<label class="col-md-2">คำนำหน้าชื่อ</label>
			<div class="col-12-md-2 form-inline">
					<input type="radio" name="sex" id="sex1" value="นาย">นาย 
					<input type="radio" name="sex" id="sex2" value="นางสาว">นาวสาว
			</div>
		</div><!--END ROW6-->

		<div class="row space-top">
			<div class="col-md-4 form-inline">
				<label class="col-md-6 text-title">ชื่อ</label>
				<input type="text" name="fname" id="fname" class="form-control">
			</div>

			<div class="col-md-4 form-inline">
				<label class="col-md-6 text-title">นามสกุล</label>
				<input type="text" name="lname" id="lname" class="form-control">
			</div>

			<div class="col-md-4 form-inline">
				<label class="col-md-6 text-title">อายุ</label>
				<input type="text" name="age" id="age" class="form-control">
			</div>

			<div class="col-md-4 form-inline space-a">
				<label class="col-md-6 text-title">เชื้อชาติ</label>
				<input type="text" name="nation" id="nation" class="form-control">
			</div>

			<div class="col-md-4 form-inline space-a">
				<label class="col-md-6 text-title">สัญชาติ</label>
				<input type="text" name="citizen" id="citizen" class="form-control">
			</div>

			<div class="col-md-4 form-inline space-a">
				<label class="col-md-6 text-title">ศาสนา</label>
				<input type="text" name="reli" id="reli" class="form-control">
			</div>

			<div class="col-md-4 form-inline space-a">
				<label class="col-md-6 text-title">เลขประจำตัวประชาชน</label>
				<input type="text" name="id_card" id="id_card" class="form-control">
			</div>

		</div><!--END ROW7-->

		<div class="row space-top">
			<h4 class="text-center space-top">ข้อมูสำเร็จการศึกษา</h4>
			<div class="col-md-12 head-dot"></div> 
			<div class="col-md-12 form-inline ">
				<label class="col-md-4 layout-subject" style="margin-right:25px;">สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลาย ปีการศึกษา</label>
				<input type="text" class="form-control" id="graduate" name="graduate">
			</div>

			<div class="row">
				<div class="col-md-4 form-inline space-top">
					<label class="col-md-4 layout-subject">ชื่อโรงเรียน</label>
					<input type="text" class="form-control" id="school" name="school">
				</div>


				<div class="col-md-4 form-inline space-top">
				<label class="col-md-4 layout-subject">จังหวัด</label>
				<select class="form-control select-other" id="province_school" name="province_school" onchange="SendProvince(this.value);">
					<option value="0">เลือกจังหวัด</option>
					<?php
						$strSql ="SELECT * FROM province ORDER BY province_id ASC";
						$strQuery = mysqli_query($objConnect,$strSql);

						while ($rows = mysqli_fetch_array($strQuery)){

								$province_id = $rows['province_id'];
								$province_name = $rows['province_name'];

					?>
							<option value="<?=$province_id?>"><?=$province_name?></option>

					<?php
						}
					?>
				</select>
			</div>





			<div class="col-md-4 form-inline space-top ">
				<label class="col-md-4 layout-subject">เขต/อำเภอ</label>
				<select class="form-control select-other" id="district_school" name="district_school">
					<option value="0">เขต/อำเภอ</option>
					
				</select>
			</div>







			</div><!--end row-->

		<div class="row space-top btn-position text-center">
	  			<input type="submit" class="btn btn-primary" value="สมัครสอบ"> 
	  			<input type="reset" class="btn btn-default" value="ยกเลิก">
	  	</div>

		</form><!--END FORM-->

	  	<div class="col-md-12 head-dot"></div>
	  	<div class="col-md-12"><p style="text-align:center;">คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร</p></div>
		
		</div><!--container-->
</div><!--container-fluid-->

</body>
</html>