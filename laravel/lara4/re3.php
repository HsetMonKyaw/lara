<?php
$employee=[
  [
    "name"=>"Mg Mg",
    "level"=>'Junior',
    "salary"=>300000,
    "photo"=>"images/pexels.jpg"
  ],
  [
    "name"=>"David",
    "level"=>'Junior',
    "salary"=>350000,
    "photo"=>"images/pexels.jpg"
  ],
  [
    "name"=>"Aung Aung",
    "level"=>'Senior',
    "salary"=>700000,
    "photo"=>"images/pexels.jpg"
  ],
  [
    "name"=>"Hla Hla",
    "level"=>'Management',
    "salary"=>1200000,
    "photo"=>"images/pexels.jpg"
  ],
];
   for ($row=0; $row <sizeof($employee) ; $row++) {
     $bonous=0;
     if ($employee[$row]['level']=="Junior" && $employee[$row]['salary']>300000)
     {
       $bonous=0.08*$employee[$row]['salary'];
     }
     elseif ($employee[$row]['level']=="Senior" && $employee[$row]['salary']>500000)
      {
       $bonous=0.1*$employee[$row]['salary'];
     }
     elseif ($employee[$row]['level']=="Management" && $employee[$row]['salary']>1000000)
      {
       $bonous=0.11*$employee[$row]['salary'];
     }
     $net_salary=$bonous+$employee[$row]['salary'];
     echo $employee[$row]['name'].":".$net_salary."<br>";
   }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
     <div class="container">
       <div class="row">
         <table class='table table-striped'>
           <thead>
             <tr>
               <th>Name</th>
               <th>Level</th>
               <th>Salary</th>
               <th>Bonous</th>
               <th>Net salary</th>
             </tr>
             </thead>
              <?php
                 for($row=0;$row<sizeof($employee);$row++)
                 {
                  echo "<tr>";
                  foreach($employee[$row] as $key=>$value)
                  {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                  }
                   $bonous=0;
                   if ($employee[$row]['level']=="Junior" && $employee[$row]['salary']>300000)
                   {
                     $bonous=0.08*$employee[$row]['salary'];
                   }
                   elseif ($employee[$row]['level']=="Senior" && $employee[$row]['salary']>500000)
                   {
                     $bonous=0.1*$employee[$row]['salary'];
                   }
                   elseif ($employee[$row]['level']=="Management" && $employee[$row]['salary']>1000000)
                  {
                    $bonous=0.11*$employee[$row]['salary'];
                  }
                   $net_salary=$bonous+$employee[$row]['salary'];
                   echo "<td>".$bonous."</td>";
                   echo "<td>". $net_salary. "</td>";
                  echo "</tr>";
                 }
               ?>
          </table>
         </div>
            <div class="row">
            <?php
            for($row=0;$row<sizeof($employee);$row++)
            {
              echo "<div class='col-md-4'>";
              echo "<div class='row'>";
              echo "<div class='col-md-4'>";
              echo "<img src='". $employee[$row]['photo']."' width='100%'>";
              echo "</div>";
              echo "<div class='col-md-8'>";
              echo  $employee[$row]['name']."<br>". $employee[$row]['level']."<br>". $employee[$row]['salary']."<br>";
              if ($employee[$row]['level']=="Junior" && $employee[$row]['salary']>300000)
                   {
                     $bonous=0.08*$employee[$row]['salary'];
                   }
                   elseif ($employee[$row]['level']=="Senior" && $employee[$row]['salary']>500000)
                   {
                     $bonous=0.1*$employee[$row]['salary'];
                   }
                   elseif ($employee[$row]['level']=="Management" && $employee[$row]['salary']>1000000)
                  {
                    $bonous=0.11*$employee[$row]['salary'];
                  }
                   $net_salary=$bonous+$employee[$row]['salary'];
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
