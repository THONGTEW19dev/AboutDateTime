<?php
date_default_timezone_set("Asia/Bangkok"); //กดหนดตำแหน่งที่อยู่ของเวลาและวันที่

$datenow = date("d/m/Y H:i:sa");    //วัน/เดือน/ปีและเวลาปัจจุบัน (กำหนดเอง)
$datesql = date("Y-m-d H:i:s");    //วัน/เดือน/ปีและเวลาปัจจุบัน (ฐานข้อมูล DATETIME format)
$datemn = date("M,d,Y h:i:s A");   //วัน/เดือน/ปีและเวลาปัจจุบัน (สากล)
$day = date("d/m/Y");              //วัน/เดือน/ปีปัจจุบัน
$daydel0 = date("j/n/Y");          //วัน/เดือน/ปีปัจจุบัน ตัดเลข 0 ออก
$daynow = date("d");               //วันที่ปัจจุบัน
$monthnow = date("m");             //เดือนปัจจุบัน
$yearnow = date("Y");              //ปีปัจจุบัน
$timenow = date("H:i:s");          //เวลาปัจจุบัน
$timepmam = date("H:i:sa");        //เวลาปัจจุบันแสดง pm และ am
$today = date("l");                //วันที่ปัจจุบันชื่อภาษาอังกถษ:Sunday,Monday
$today2 = date("D");               //วันที่ปัจจุบันชื่อภาษาอังกถษ:Sun,Mon
$tomonth = date("M");              //เดือนปัจจุบันชื่อภาษาอังกฤษ:Jan,Feb
$pmam = date("a");                 //แสดง pm,am
$PMAM = date("A");                 //แสดง PM,AM
$toyear = $yearnow + 543;          //ปีพุทธศักราช พ.ศ.

$tomorrow = date("d/m/Y", strtotime(strtotime($day) . "tomorrow"));  //วัน/เดือน/ปีของวันพรุ้งนี้

$date1 = "01-03-2013";             //กำหนดเวลาที่ 1
$date2 = "01-05-2014";             //กำหนดเวลาที่ 2
$dc1 = date_create($date1);        //กดหนดให้ $date1 เป็นวันที่ที่ถูกสร้างขึ้นเอง
$dc2 = date_create($date2);        //กดหนดให้ $date2 เป็นวันที่ที่ถูกสร้างขึ้นเอง
$diff = date_diff($dc1, $dc2);     //date_diff คือการหาระยะห่าง ของในที่นี้คือ $dc1,$dc2

$dayplusday = date("d/m/Y", strtotime(strtotime($day) . "+1 day"));     //วันที่ปัจจุบัน +1 วัน
$dayplusweek = date("d/m/Y", strtotime(strtotime($day) . "+1 weeks"));  //วันที่ปัจจุบัน +1 สัปดาห์
$dayplusmont = date("d/m/Y", strtotime(strtotime($day) . "+1 month"));  //วันที่ปัจจุบัน +1 เดือน
$dayplusyear = date("d/m/Y", strtotime(strtotime($day) . "+1 year"));   //วันที่ปัจจุบัน +1 ปี

$hourplus1 = date("H:i:s", strtotime($timenow . "+1 hour"));    //เวลาปัจจุบัน +1 ชั่วโมง (+1,-1)
$h_hourplus1 = date("H", strtotime($hourplus1));                //ตัดให้ $hourplus1 แสดงแค่ชั่วโมง
$i_hourplus1 = date("i", strtotime($hourplus1));                //ตัดให้ $hourplus1 แสดงแค่นาที
$s_hourplus1 = date("s", strtotime($hourplus1));                //ตัดให้ $hourplus1 แสดงแค่วินาที


/* 
a	am หรือ pm
A	AM หรือ PM
B	Swatch เวลาอินเทอร์เน็ต
d	วันของเดือน ตัวเลขสองหลักที่มีศูนย์นำหน้า เช่น "01" ถึง "31"
D	วันในสัปดาห์ ข้อความ สามตัวอักษร; คือ "ศุกร์"
F	เดือน, ข้อความ, ยาว; กล่าวคือ "มกราคม"
g	ชั่วโมง รูปแบบ 12 ชั่วโมงโดยไม่มีศูนย์นำหน้า เช่น "1" ถึง "12"
G	ชั่วโมง รูปแบบ 24 ชั่วโมงโดยไม่มีศูนย์นำหน้า เช่น "0" ถึง "23"
h	รูปแบบชั่วโมง 12 ชั่วโมง; เช่น "01" ถึง "12"
H	ชั่วโมง รูปแบบ 24 ชั่วโมง; เช่น "00" ถึง "23"
i	นาที; เช่น "00" ถึง "59"
I	(ตัวพิมพ์ใหญ่ i) "1" หากเวลาออมแสง "0" มิฉะนั้น
j	วันของเดือนโดยไม่มีศูนย์นำหน้า เช่น "1" ถึง "31"
l	(ตัวพิมพ์เล็ก 'L') วันในสัปดาห์, ข้อความ, แบบยาว; คือ "วันศุกร์"
L	บูลีนไม่ว่าจะเป็นปีอธิกสุรทิน เช่น "0" หรือ "1"
m	เดือน; เช่น "01" ถึง "12"
M	เดือน, ข้อความ, 3 ตัวอักษร; คือ "แจน"
n	เดือนที่ไม่มีศูนย์นำหน้า เช่น "1" ถึง "12"
r	วันที่จัดรูปแบบ RFC 822; เช่น "พฤหัสบดี 21 ธันวาคม 2000 16:01:07 +0200" (เพิ่มใน PHP 4.0.4)
s	วินาที; เช่น "00" ถึง "59"
S	คำต่อท้ายลำดับภาษาอังกฤษ, ข้อความ, 2 ตัวอักษร; เช่น "th", "nd"
t	จำนวนวันในเดือนที่กำหนด เช่น "28" ถึง "31"
T	การตั้งค่าเขตเวลาของเครื่องนี้ เช่น "MDT"
U	วินาทีตั้งแต่ยุค
w	วันในสัปดาห์ ตัวเลข เช่น "0" (วันอาทิตย์) ถึง "6" (วันเสาร์)
Y	ปี 4 หลัก; คือ "2542"
y	ปี 2 หลัก; คือ "99"
z	วันของปี; เช่น "0" ถึง "365"
Z	ชดเชยเขตเวลาเป็นวินาที (เช่น "-43200" ถึง "43200")
*/


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <META HTTP-EQUIV='Refresh' CONTENT='1; URL=aboutdatetime.php'>
    <title>AboutTime</title>
</head>

<body>
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-5 mt-5 mb-5">
                <div class="card shadow" style="padding: 20px 50px;">
                    <div class="card-body">
                        <h2 class="text-center">เวลาและวันที่ปัจจุบัน</h2>
                        <div class="d-flex justify-content-center">
                            <hr width="400px">
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>เวลาปัจจุบัน (กำหนดเอง) : <?= $datenow; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>เวลาปัจจุบัน (สากล) : <?= $datemn; ?></h4>
                            </div>
                        </div>
                        
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>เวลาปัจจุบัน (SQL DATETIME) : <?= $datesql; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>วัน/เดือน/ปีปัจจุบัน : <?= $day; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>วันที่ปัจจุบัน : <?= "$daynow ($today)"; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>เดือนปัจจุบัน : <?= "$monthnow ($tomonth)"; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>ปีปัจจุบัน : <?= "$yearnow ($toyear)"; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>เวลาปัจจุบัน : <?= $timenow ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>เวลาวันพรุ่งนี้ : <?= $tomorrow ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-5 mb-5">
                <div class="card shadow" style="padding: 20px 50px;">
                    <div class="card-body">

                        <h2 class="text-center">การเปรียบเทียบวันและเวลา</h2>

                        <div class="d-flex justify-content-center">
                            <hr width="400px">
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4>เวลาที่ 1 : <?= $date1; ?></h4>
                                <h4>เวลาที่ 2 : <?= $date2; ?></h4>
                                <!-- 
                            %a = chk day
                            %m = chk month
                            %y = chk year
                        -->
                                <h4>เปรียบเทียบระยะห่าง(วันที่) : <?= $diff->format("%a day"); ?></h4>
                                <h4>เปรียบเทียบระยะห่าง(เดือน) : <?= $diff->format("%m month"); ?></h4>
                                <h4>เปรียบเทียบระยะห่าง(ปี) : <?= $diff->format("%y day"); ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4><u>วันที่ปัจจุบัน : <?= $day; ?></u></h4>
                                <h4>+1 วัน : <?= $dayplusday; ?></h4>
                                <h4>+1 สัปดาห์ : <?= $dayplusweek; ?></h4>
                                <h4>+1 เดือน : <?= $dayplusmont; ?></h4>
                                <h4>+1 ปี : <?= $dayplusyear; ?></h4>
                            </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-body">
                                <h4><u>เวลาปัจจุบัน : <?= $timenow; ?></u></h4>
                                <h4>+1 ชั่วโมง : <?= $hourplus1; ?></h4>
                                <h4>+1 ชั่วโมง (H) : <?= $h_hourplus1; ?></h4>
                                <h4>+1 ชั่วโมง (i) : <?= $i_hourplus1; ?></h4>
                                <h4>+1 ชั่วโมง (s) : <?= $s_hourplus1; ?></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-1"></div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>