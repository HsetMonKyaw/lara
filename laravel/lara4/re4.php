<?php
  $mark1=80;
  $mark2="59";
  
  echo gettype($mark1);
  echo gettype($mark2);
  
  var_dump($mark1==$mark2);
  var_dump($mark1===$mark2);
  
  $mark2=50;
  var_dump($mark1<=>$mark2);

  $result=$mark1 >75 ? "Destinction" : "Pass";
  $result1=$mark1 >60 && $mark2 >50 ? "Destinction" : "Pass";

  echo "<br>".$result;
  echo "<br>".$result1;

  $result2=$mark1>=70 ? "Destination" :($mark1>=65 ? "Pass" :($mark1>=50 ? "Credit" :"Fail"));

  echo "<br>".$result2;

  $student=null;
  $status=$student ?? "Default user";
  echo "<br>".$status;

  switch(true){
    case ($mark1>=75) : $status1="Destination";break;
    case ($mark1>=65) : $status1="Pass";break;
    case ($mark1>=50) : $status1="Credit";break;
    default : $status1="Fail";
  }

  echo "<br>".$status1;

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
echo "<br>".$tatal_cash=($quantity*$unit_price)-$totaldiscount;

$marks=[78,90,88,76];
$count=0;
$totalmark=0;
while($count<sizeof($marks)){
    $totalmark+=$marks[$count];
    $count++;
}
echo "<br> Total mark :".$totalmark;

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
    while($count<sizeof($shopping)){
        $total_amount+=$shopping[$count]['price']*$shopping[$count]['qty'];
        $count++;
    }
    echo "<br> Total amount : ".$total_amount;

    function calculate_total_cash($shopping_list){
     $total=0;
     foreach($shopping_list as $key=>$item)
     {
        $total+=$item['price']*$item['qty'];
     }
     switch(true){
        case($total>=300000) :$discount=0.03*$total;break;
        case($total>=100000) :$discount=0.01*$total;break;
        default : $discount=0;
     }
     $total_cash=$total-$discount;
     return $total_cash;
    }
    $total_cash=calculate_total_cash($shopping);
    echo "<br> Total cash :".$total_cash;
    
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