<?php
    require './connect.php';//link
    


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style_form.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
    <title>แบบฟอร์มการส่งงาน</title>
    <!-- Bootstrap -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="js/bootstrap.min.js"></script>
    

</head>
<body>


    <div class="head-logo">
        <img src="images/logo.png">
        <div class="menu">        
            <center><ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul></center>
        </div>
        <div class="head-dot"></div>
    </div>
    
    <form action="complete.php" method="post" enctype="multipart/form-data">
    

            <br><br>
            <center><h4 class="text-order">Order Works</h4></center><br><br>
            <div class="row1">
            
            

                <div class="box">
                <label class="col">ชื่อ</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text"  name="name" id="name"class="formcontrol">
                </div>
                <br>

            <div class="box">
                <label class="col">นามสกุล</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="surname" id="surname" class="formcontrol" >
            </div>
            <br>

            <div class="box">
                <label class="col">รหัสนักศึกษา</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="student_ID" id="student_ID" class="formcontrol">
            </div>
            <br>
            <br>


            <div class="box">
                <label class="col">รูปแบบของงาน</label> &nbsp;
                <input type="radio" name="type" id="type1" value="Print งานบนกระดาษ">Print งานบนกระดาษ
                <input type="radio" name="type" id="type2" value="สกรีนลงแผ่น CD">สกรีนลงแผ่น CD
                <input type="radio" name="type" id="type3" value="ป้าย ไวนิล">ป้าย ไวนิล
                <br>
            </div>
            <br>

            <div class="box">
                <label class="col">ขนาดกระดาษ</label> &nbsp;
                <select class="form-control" name="papersize" id="papersize" >
                    <option value="กรุณาเลือกขนาดกระดาษ">กรุณาเลือกขนาดกระดาษ</option>
                    <option value="A0">A0</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                </select> 
                <br>
            </div>
            <br>

            <div class="box">
                <label class="col">สีที่ปริ้นท์</label> &nbsp;
                <select class="form-control" name="color" id="color" >
                    <option value="กรุณาเลือกสี">กรุณาเลือกสี</option>
                    <option value="สี">สี</option>
                    <option value="ขาว-ดำ">ขาว-ดำ</option>
                </select> 
                <br>
            </div>

            <br>

            <div class="box">
                <label class="col">รูปแบบการเข้าเล่ม</label> &nbsp;
                <input type="radio" name="types" id="types1" value="สันกาว">สันกาว
                <input type="radio" name="types" id="types2" value="กระดูกงู">สันกระดูกงู
                <input type="radio" name="types" id="types3" value="สันเกลียว">สันเกลียว
                <input type="radio" name="types" id="types4" value="ไม่เข้ารูปเล่ม">ไม่เข้ารูปเล่ม
                <br>
            </div>

            <br>

             
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="100000" /> -->
            <div class="col-md-12 form-inline">
                
            <input type="file" name="upfile" id="upfile">






            <br><br>
            <button class="submit" type="submit" value="Send" name="send">Send</button>




            </form>
        </div>
    

            


    </div>
 </form>


    
   
    
</body>
</html>