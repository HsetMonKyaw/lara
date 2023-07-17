<?php
   define ('pi',3.142);
   echo pi;

   $name="David";
   echo "<br>".$name;

   const pi1=3.1423;
   echo "<br>".pi1;

   $mark=[70,86,99,92];
   $total=$mark[0]+$mark[1]+$mark[2]+$mark[3];
   $avg=$total/count($mark);

   echo "<br>";
   echo "Total marks is $total <br>";
   echo "Average is $avg <br>";


   $student_marks=[
     [86,99,56,66],
     [77,59,93,66],
     [59,85,74,95],
     [69,88,96,89]
   ];

   for ($row=0; $row <sizeof($student_marks) ; $row++) {
     $totalmark=0;
     for ($col=0; $col <sizeof($student_marks[$row]) ; $col++) {
       $totalmark=$totalmark+$student_marks[$row][$col];
       }
       $avg=$totalmark/sizeof($student_marks[$row]);
       echo "<br> average mark is $avg";
   }

   $categories=['Healthy','Medicine','Beauty','Pretty','Cosmatics','Makeup'];
   $invoice=[

    [
        'name'=>"monthly subscription",
        'price'=>150,
        'qty'=>30
    ],
    [
        'name'=>"Theme Customization",
        'price'=>500,
        'qty'=>10
    ],
    [
        'name'=>"Addition Service",
        'price'=>350,
        'qty'=>20
    ]

  ];


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
     <div class="col-md-6">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>No</td>
              <td>sub1</td>
              <td>sub2</td>
              <td>sub3</td>
              <td>sub4</td>
              <td>Total</td>
              <td>Avg</td>
              <td>sub-Avg</td>
            </tr>
          </thead>
          <?php
              for ($row=0; $row <sizeof($student_marks) ; $row++) {
                echo "<tr>";
                echo "<td>". ($row+1) ."</td>";
                for ($col=0; $col <sizeof($student_marks[$row]) ; $col++) {
                  echo "<td>";
                  echo $student_marks[$row][$col];
                  echo "</td>";
                  $totalmark=$totalmark+$student_marks[$row][$col];
                  }
                  echo "<td>$totalmark</td>";
                  echo "<td>".$totalmark/sizeof($student_marks[$row])."</td>";

                  if(($student_marks[$row][0]-$totalmark/sizeof($student_marks[$row]))<=0){
                    echo "<td class='bg-danger'>".($student_marks[$row][0]-$totalmark/sizeof($student_marks[$row]))."</td>";
                  }
                    else {
                       echo "<td>".($student_marks[$row][0]-$totalmark/sizeof($student_marks[$row]));
                    }

                echo "<td>".(($student_marks[$row][0]-$totalmark/sizeof($student_marks[$row]))**2)."</td>";
                echo "</tr>";
              }
           ?>
         </table>
     </div>
   </div>
       <div class="row">
         <?php
              for ($col=0; $col <sizeof($categories) ; $col++) {
                if ($col%2!=0) {
                  echo "<div class='col-2 boder bg-warning'>";
                  echo $categories[$col];
                  echo "</div>";
                }
                else {
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
                  <th>price</th>
                  <th>Quality</th>
                  <th>Total</th>
                </tr>
              </thead>
              <?php
                 $subtotal=0;
                 for ($row=0; $row < sizeof($invoice); $row++) {
                   echo "<tr>";
                   echo "<th>".$invoice[$row]['name']."</th>";
                   echo "<th>".$invoice[$row]['price']."</th>";
                   echo "<th>".$invoice[$row]['qty']."</th>";
                   echo "<th>".$total=$invoice[$row]['price']*$invoice[$row]['qty']."</th>";
                   $subtotal+=$invoice[$row]['price']*$invoice[$row]['qty'];
                   echo "</tr>";
                 }
                 echo "<tr>";
                 echo "<th></th>
                 <th></th>
                 <th>Subtotal</th>";
                 echo "<th>$subtotal</th>";
                 echo "</tr>";

              ?>
            </table>
        </div>
     </div>
   <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
