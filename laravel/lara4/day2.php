<?php
define('pi',3.141);
echo pi;

$name="David";
echo $name;

const pi1=3.1412;
echo pi1;
//pi1=3.141;
//arithmetic operators
//+,-,*,%,**

$marks=[67,88,89,90];
$total=$marks[0]+$marks[1]+$marks[2]+$marks[3];
$avg=$total/count($marks);
echo "<br>";
echo "totalclass is $total <br>";
echo "avg is $avg <br>";

$student_marks=[
    [67,66,89,90],
    [63,88,78,90],
    [78,83,52,90],
    [67,88,90,90]
];

for($row=0;$row<sizeof($student_marks);$row++)
{
    $total_marks=0;
    for($col=0;$col<sizeof($student_marks[$row]);$col++)
    {
        $total_marks=$total_marks+$student_marks[$row][$col];
    }
    $avg_mark=$total_marks/sizeof($student_marks[$row]);
    echo "<br>average mark is $avg_mark";
}

$categories=["Herbs","Electrical device","Cosmatic","Makeup","lipsticks","Medicine"];
$invoice=[
    
    [
        'name'=>"monthly subscription",
        'price'=>15,
        'qty'=>3
    ],
    [
        'name'=>"Theme Customization",
        'price'=>50,
        'qty'=>1
    ],
    [
        'name'=>"Addition Service",
        'price'=>35,
        'qty'=>2
    ]
        
    ]


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
    <div class ="row">
        <div class="col-md-6">
            <table class="table table-striped">
            <thread>
                <tr>
                   <th>No</th> 
                   <th>sub1</th>
                   <th>sub2</th>
                   <th>sub3</th>
                   <th>sub4</th>
                   <th>Total</th>
                   <th>Avg</th>
                   <th>sub-Avg</th>
                </tr>
           </thread>
            <?php
            for($row=0;$row<sizeof(($student_marks));$row++)
            {   
                
                echo "<tr>";
                echo "<td>".($row+1)."</td>";
                for($col=0;$col<sizeof(($student_marks[$row]));$col++)
                {
                    echo "<td>";
                    echo $student_marks[$row][$col];
                    echo "</td>";
                    $total_marks=$total_marks+$student_marks[$row][$col];
        
                }
                echo "<td>$total_marks</td>";
                echo "<td>".$total_marks/sizeof($student_marks[$row])."</td>";
               
               if(($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row])) <=0){
                echo "<td class='bg-danger'>".($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]))."</td>";
               }else{
                echo "<td>".($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]))."</td>";
                }
                
                echo "<td>". (($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]))**2). "</td>";
                echo "</tr>";
            }
            ?>
          </table>  
  </div>
</div>
     <div class="row">
     <?php
     for($col=0;$col<sizeof($categories);$col++)
     {
       if($col%2!=0)
       {
        echo "<div class='col-2 boder bg-warning'>";
        echo $categories[$col];
        echo "</div>";
     }
       else
       {
        echo "<div class='col-2'>";
        echo $categories[$col];
        echo "</div>";
       }
     }
     ?>
    
     </div><br>
      <div class="row">
      <div class="col-12">
      <table class="table table-striped">
        <thead>
            <tr>
                <th>Description</th>
                <th>Price</th>
                <th>Quality</th>
                <th>Total</th>
            </tr>
    </thead>
    <?php
      $subtotal=0;
      for($row=0;$row<sizeof($invoice);$row++)
      {
        echo "<tr>";
        echo "<th>". $invoice[$row]['name']. "</th>";
        echo "<th>". $invoice[$row]['price']. "</th>";
        echo "<th>". $invoice[$row]['qty']. "</th>";
        echo "<th>". $total=$invoice[$row]['price']*$invoice[$row]['qty']. "</th>";
        $subtotal += $invoice[$row]['price']*$invoice[$row]['qty'];
        echo "</tr>";
      }
        echo "<tr>";
        echo "<th></th>
        <th></th>
        <th>subtotal</th>";
        echo "<th>$subtotal<th>";
        echo "</tr>";
        ?>
        </table>
    </div>
    </div>
</div>

     <scrippt src="js/bootstrap.min.js"></script>
</body>
</html>