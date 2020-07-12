<?php
date_default_timezone_set('Asia/Jakarta');
include "function1.php";

$myfile = fopen("sessions.txt", "r") or die("Unable to open file!");
$token = fread($myfile,filesize("sessions.txt"));
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Your promo ready to use!')){
        echo "\n".color("greeb"," Message: ".$message);
        fclose($myfile);
        }else{
        echo "\n".color("red"," Message: ".$message);
        fclose($myfile);
        }