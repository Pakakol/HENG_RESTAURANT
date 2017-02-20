
function Calculate (){

	var gpax = $('#gpax').val();
	var gat = $('#gat').val();

	var pat1 = $('#pat1').val();
	var pat2 = $('#pat2').val();

	var onet1 = $('#onet1').val();
	var onet2 = $('#onet2').val();
	var onet3 = $('#onet3').val();
	var onet4 = $('#onet4').val();
	var onet5 = $('#onet5').val();
	var onet6 = $('#onet6').val();
	var onet7 = $('#onet7').val();
	var onet8 = $('#onet8').val();



var gpaxCal = (gpax*75)*20;
var pat1Cal = pat1*20;
var pat2Cal = pat2*20;

var gatCal1 = gat*10;
var gatCal2 = gat*20;
var gatCal3 = gat*50;

var onet1Cal = (onet1*3)*5;
var onet2Cal = (onet2*3)*5;
var onet3Cal = (onet3*3)*5;
var onet4Cal = (onet4*3)*5;
var onet5Cal = (onet5*3)*5;

var onet6Cal = parseFloat(onet6);
var onet7Cal = parseFloat(onet7);
var onet8Cal = parseFloat(onet8);

var onet678Cal = (onet6Cal+onet7Cal+onet8Cal)*5;

var sum1 = gpaxCal+pat1Cal+pat2Cal+gatCal1+onet1Cal+onet2Cal+onet3Cal+onet4Cal+onet5Cal+onet678Cal;

var sum2 = gpaxCal+pat1Cal+gatCal2+onet1Cal+onet2Cal+onet3Cal+onet4Cal+onet5Cal+onet678Cal;

var sum3 = gpaxCal+gatCal3+onet1Cal+onet2Cal+onet3Cal+onet4Cal+onet5Cal+onet678Cal;


$('#sum1').val(sum1);
$('#sum2').val(sum2);
$('#sum3').val(sum3);

$('#hsum1').val(sum1);
$('#hsum2').val(sum2);
$('#hsum3').val(sum3);


SelectProcess(sum1,sum2,sum3); // call function

}


function SelectProcess(sum1,sum2,sum3) {

	$.ajax({
		type:'POST',
		data:{sum1:sum1,sum2:sum2,sum3:sum3},
		url:'ajax/process-select-major.php',
		success:function(data){$("#load-select").html(data);}
	});



}

function Validate(){

	var gpax =$('#gpax').val();

	if (gpax == null || gpax =="" ) {

		alert("กรุณากรอก GPAX");
		$('#gpax').focus();
		// document.getElementById('gpax').focus();

		return false;

	}else if (gpax > 4.00){

		alert("GPAX ห้ามเกิน 4.00");
		$('#gpax').focus();
		return false;
	}

	var major1 =$('#major1').val();
	var major2 =$('#major2').val();
	var major3 =$('#major3').val();

	if(major1 == major2 || major2 == major3 || major3 == major1){

		alert("ไม่ให้เลือกซ้ำกัน");
		$('#major1').focus();
		return false;

	}else if (major1 == "mini1"){

		alert("คะแนนไม่ถึงขั้นต่ำ");
		$('#major1').focus();
		return false;
	}else if (major2 == "mini2"){

		alert("คะแนนไม่ถึงขั้นต่ำ");
		$('#major2').focus();
		return false;
	}else if (major3 == "mini3"){

		alert("คะแนนไม่ถึงขั้นต่ำ");
		$('#major3').focus();
		return false;
	}

	var id_card = $('#id_card').val();

	if (id_card.length != 13 || id_card == "" || id_card == null)
	{
		alert("ตรวจสอบเลขประจำตัวประชาชน");
		$('#id_card').focus();
		return false;
	}


}

function SendProvince(value){

	// alert(value);
	$.ajax({
		type:'POST',
		data:{value:value},
		url:'ajax/process-select-district.php',
		success:function(data){$("#district_school").html(data);}
	});
}