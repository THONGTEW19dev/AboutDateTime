<?php
date_default_timezone_set("Asia/Bangkok");
$datenow = date("d-m-Y H:i:s");
$daynow = date("d");
$monthnow = date("m");
$yearnow = date("Y");
$timenow = date("H:i:s");
$today = date("l");
$tomonth = date("M");
$toyear = $yearnow+543;
$d = strtotime("tomorrow");

$date1 = "01-03-2013";
$date2 = "01-05-2014";
$dc1=date_create($date1);
$dc2=date_create($date2);
$diff=date_diff($dc1,$dc2);


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
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <hr class="mt-5">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>เวลาปัจจุบัน : <?= $datenow; ?></h4>
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
                        <h4>เวลาปัจจุบัน : <?= $timenow; ?></h4>
                    </div>
                </div>
                
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h4>เวลาวันพรุ่งนี้ : <?= date("d-m-Y H:i:s",$d); ?></h4>
                    </div>
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
                
                <hr>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>