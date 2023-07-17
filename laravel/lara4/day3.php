
<?php

$emoloyee=[
    [
        "name"=>"Kyaw Kyaw",
        "level"=>'Senior',
        "salary"=>700000,
        "photo"=>'images/Download.jpg'
    ],
    [
        "name"=>"Thiri",
        "level"=>'Junior',
        "salary"=>280000,
        "photo"=>'images/Download.jpg'
    ],
    [
        "name"=>"Htet Htet",
        "level"=>'Junior',
        "salary"=>350000,
        "photo"=>'images/Download.jpg'
    ],
    [
        "name"=>"David",
        "level"=>'Management',
        "salary"=>1200000,
        "photo"=>'images/Download.jpg'
    ],
];

for($row=0;$row<sizeof($emoloyee);$row++){
    $bonous=0;
    if ($emoloyee[$row]['level']=="Junior" && $emoloyee[$row]['salary']>300000)
    {
        $bonous=0.08*$emoloyee[$row]['salary'];
    }
    else if($emoloyee[$row]['level']=="Senior" && $emoloyee[$row]['salary']>500000)
    {
        $bonous=0.1*$emoloyee[$row]['salary'];
    }
    else if($emoloyee[$row]['level']=="Management" && $emoloyee[$row]['salary']>1000000)
    {
        $bonous=0.11*$emoloyee[$row]['salary'];
    }
    $net_salary=$bonous+$emoloyee[$row]['salary'];
    echo $emoloyee[$row]['name'].":" .$net_salary ."<br>";
}
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
        <table class="table table-striped">
         
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Salary</th>
                <th>Bonous</th>
                <th>Net Salary</th>
            </tr>
         
         
            <?php
              for($row=0;$row<sizeof($emoloyee);$row++){
                echo "<tr>";
                foreach($emoloyee[$row] as $key=>$value)
                {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                }
                $bonous=0;
                if ($emoloyee[$row]['level']=="Junior" && $emoloyee[$row]['salary']>300000)
                {
                    $bonous=0.08*$emoloyee[$row]['salary'];
                }
                else if($emoloyee[$row]['level']=="Senior" && $emoloyee[$row]['salary']>500000)
                {
                    $bonous=0.1*$emoloyee[$row]['salary'];
                }
                else if($emoloyee[$row]['level']=="Management" && $emoloyee[$row]['salary']>1000000)
                {
                    $bonous=0.11*$emoloyee[$row]['salary'];
                }
                $net_salary=$bonous+$emoloyee[$row]['salary'];
                echo "<td>". $bonous ."</td>";
                echo "<td>" .$net_salary ."</td>";
                echo "</tr>";
              }
            ?>
         

        </table>
        </div>

        <div class="row">
        <?php
            for($row=0;$row<sizeof($emoloyee);$row++)
            {
                echo "<div class='col-md-4' border>";
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "<img src='".$emoloyee[$row]['photo']."' width='100%'>";
                echo "</div>";
                echo "<div class='col-md-8'>";
                echo $emoloyee[$row]['name']."<br>". $emoloyee[$row]['level']."<br>".$emoloyee[$row]['salary']."<br>";
                if ($emoloyee[$row]['level']=="Junior" && $emoloyee[$row]['salary']>300000)
                {
                    $bonous=0.08*$emoloyee[$row]['salary'];
                }
                else if($emoloyee[$row]['level']=="Senior" && $emoloyee[$row]['salary']>500000)
                {
                    $bonous=0.1*$emoloyee[$row]['salary'];
                }
                else if($emoloyee[$row]['level']=="Management" && $emoloyee[$row]['salary']>1000000)
                {
                    $bonous=0.11*$emoloyee[$row]['salary'];
                }
                $net_salary=$bonous+$emoloyee[$row]['salary'];
                echo $net_salary;
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>

    </div>
</div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>