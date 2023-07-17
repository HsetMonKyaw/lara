<?php

var_dump($_SERVER);
echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD']=='GET'){
    setcookie("name","David",time()+100);
    // header('location:day8_success.php');
    $date=date('d/m/y');
    echo $date;
    $timestamp=time();
    echo $timestamp;
    // $original_date=time();

    echo date('d/m/y h:i:s',$timestamp);
    echo date_default_timezone_get();
    date_default_timezone_set('Asia/Yangon');
    echo date_default_timezone_get();
    echo "<br>";
    echo date('d/m/y h:i:s',$timestamp);
    $new_Date=date('d/m/y',strtotime('newdate'));
    echo $new_Date;
    echo "<br>";
    $yesterday=date('y.m.d',strtotime('yesterday'));
    echo $yesterday;
    echo "<br>";
    $tomorrow=date('d-m-y',strtotime('tomorrow'));
    echo $tomorrow;
    

}
else{

}

?>