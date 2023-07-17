<?php
$history=[
    [
        "description"=>'Previous',
        "unit"=>3692
    ],
    [
        "description"=>'Current',
        "unit"=>4000
    ]
];
echo $history[1]['unit']-$history[0]['unit'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                   <thead>
                    <tr>
                        <th>Account</th>
                        <th>12/47/53</th>
                        <th>Meter No(TL-371877)</th>
                        <th>Rate</th>
                        <th>Total</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                        <th>Rate</th>
                        <th>1</th>
                        <th>1 to 100 units</th>
                        <th>200 MMK</th>
                        <th><?php echo cal_electrical_bill($history)[0]; ?></th>
                    </tr>
                    <tr>
                        <th>Meter Reading day</th>
                        <th>03/02/2016</th>
                        <th>100 to 200 units</th>
                        <th>250 MMK</th>
                        <th><?php echo cal_electrical_bill($history)[1]; ?></th>
                    </tr>
                    <tr>
                        <th colspan='2'></th>
                        <th>200 above units</th>
                        <th>300 MMK</th>
                        <th><?php echo cal_electrical_bill($history)[2]; ?></th>
                    </tr>

                    <?php

                    function cal_electrical_bill($history){
                       $different=$history[1]['unit']-$history[0]['unit'];
                        switch(true){
                            case($different>=1 && $different<=100):$cash=$different*200;break;
                            case($different>=100 && $different<=200): $firstcal=100*200; $remain=$different-100; $secondcal=$remain*250; $cash=$firstcal+$secondcal;break;
                            case($different>200) : $firstcal=(100*200);  $secondcal=(100*250); $remain=$different-200; $thirdcal=$remain*300; $cash=$firstcal+$secondcal+$thirdcal;break;
                        }
                        return array($firstcal,$secondcal,$thirdcal,$cash);
                    }
                    $subtotal=cal_electrical_bill($history)[3];

                    function calTax($amount,$rate){
                        $tax=$amount* $rate/100;
                        return $tax;
                    }

                    $rate=12.5;
                    $subtax=calTax($subtotal,$rate);

                    $tatal2=$subtotal+$subtax;

                    for($row=0;$row<sizeof($history);$row++){
                        echo "<tr>";
                        echo "<td>". $history[$row]['description']. "</td>";
                        echo "<td>". $history[$row]['unit']. "</td>";
                        echo "<td colspan='3'></td>";
                        echo "</tr>";
                    }
                    $different=0;
                    echo "<tr>";
                    echo "<th>Different</td>";
                    echo "<th>". $different=$history[1]['unit']-$history[0]['unit']. "</th>";
                    echo "<th colspan='3'></th>";
                    echo "</tr>";

                    $total_cash=cal_electrical_bill($history);
                    $maintenance_fee=500;
                    echo "<tr>";
                    echo "<th colspan='2'></th>
                          <th colspan='2'> Total : </th>";
                    echo "<th>". cal_electrical_bill($history)[3]." MMK </th>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo "<th colspan='2'></th>
                          <th colspan='2'> Maintenance Fee : </th>";
                    echo "<th>". $maintenance_fee ." MMK </th>";
                    echo "<tr>";

                    echo "<tr>";
                    echo "<th colspan='2'></th>
                          <th colspan='2'> TotalAll : </th>";
                    echo "<th>". $totalall=cal_electrical_bill($history)[2]+$maintenance_fee ." MMK </th>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th> Tax :</th>
                        <th> 12.5 </th>
                        <th colspan='2'> Total with tax : </th>";
                        echo "<th>". $tatal2. " MMK </th>";
                    echo "</tr>";
                    ?>
                   </tbody>
                </table>
            </div>
        </div>
    </div>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>