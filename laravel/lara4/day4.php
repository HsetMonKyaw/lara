<?php
$mark1=80;
$mark2="67";


echo gettype($mark1);
echo gettype($mark2);

var_dump($mark1==$mark2);
var_dump($mark1===$mark2);
$mark2=50;
var_dump($mark1<=>$mark2); //greater than=>1, less than=>-1,equal=>0

$result=$mark1 >75 ? "Destinction" : "Pass"; // ternary operator ?

$result1=$mark1 >=50 && $mark2 >=50 ? "Pass" : "Fail";

echo "<br>".$result;
echo "<br>".$result1;

$result2=$mark1>= 75 ? "Destination" : ($mark1>= 65 ? "Credit" :($mark1>=50 ? "Pass":"Fail"));

echo "<br>". $result2;

$student=null; // null collasecing operator ??

$status1=$student ?? "Default user";
echo "<br>". $status1;

switch(true){
    case ($mark1>=75): $status="Destination";break;
    case ($mark1>=65): $status="Credit";break;
    case ($mark1>=50): $status="Pass";break;
    default:$status="Fail";
}
echo "<br>". $status;
 
$unit_price=12000;
$quantity=210;
switch(true){
    case ($quantity>=200): $discount=0.1*$unit_price;break;
    case ($quantity>=150): $discount=0.08*$unit_price;break;
    case ($quantity>=100): $discount=0.05*$unit_price;break;
    case ($quantity>=50): $discount=0.03*$unit_price;break;
    default: $discount=0;
}
echo "<br>".$discount;
echo "<br>".$totaldiscount=$discount*$quantity;
echo "<br>".$total=$quantity*$unit_price;
echo "<br>".$tatal_cash=$total-$totaldiscount;

$marks=[78,90,88,76];
$count=0;
$totalmarks=0;
while($count<sizeof($marks))
{
$totalmarks+=$marks[$count];
$count++;
}
echo "<br>total marks : ".$totalmarks;

$shopping=[
    [
        "name"=>'Ma Ma noodle',
        "price"=>450,
        "qty"=>180
    ],
    [
        "name"=>'UFL Book',
        "price"=>1780,
        "qty"=>130
    ],
    [
        "name"=>'Lucky Water bottle',
        "price"=>2200,
        "qty"=>12
    ]
    ];
$count=0;
$total_amount=0;
while ($count<sizeof($shopping))
{
    $total_amount+=$shopping[$count]['price']*$shopping[$count]['qty'];
    $count++;
}
echo "<br>total amount is:".$total_amount;


//1: function definition
//function calculate_total_cash()
function calculate_total_cash($shopping_list)
{
    $total=0;
   // foreach($GLOBALS ['shopping'] as $key=>$item)
    foreach($shopping_list as $key=>$item)
    {
        $total+= $item['price']* $item['qty'];
    }
    
    switch(true){
        case ($total>300000): $discount=0.03*$total;break;
        case ($total>100000): $discount=0.01*$total;break;
        default:$discount=0;
    
    }
    $total_cash=$total-$discount;
   // echo "<br>";
    //echo "Total cash is :". $total_cash;
   
    return $total_cash;
    
}
//2: function call
//calculate_total_cash();

//calculate_total_cash($shopping);

$total_cash=calculate_total_cash($shopping);
echo "<br> Total cash is :". $total_cash;
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>