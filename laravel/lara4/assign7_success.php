<?php
 session_start();

 echo "Assign 7 Success";

 $unit=$_SESSION['unit'];
 
 var_dump($unit);

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
                    for($row=0;$row<sizeof($unit);$row++)   
                    {
                        echo "<tr>";
                        echo "<th>". $unit[$row][0]. "</th>";
                        echo "<th>". $unit[$row][1]. "</th>";
                        echo "<th>". $unit[$row][2]. "</th>";
                        echo "<th>". $total=$unit[$row][1]*$unit[$row][2]. "</th>";
                        $subtotal += $unit[$row][1]*$unit[$row][2];
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

      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>