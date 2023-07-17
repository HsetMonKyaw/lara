<?php
session_start();
echo "Assign 8 success";
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phno=$_SESSION['phno'];
$nrc=$_SESSION['nrc'];
$dob=$_SESSION['dob'];
$certificate=$_SESSION['certificate'];
$cv=$_SESSION['cv'];
$education=$_SESSION['education'];

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
            <div class="col-md-12 my-3">
                <table class="table table-boder">
                    <?php
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<td colspan=4>". $name ."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>Email</th>";
                        echo "<td colspan=4>". $email ."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>Phone Number</th>";
                        echo "<td colspan=4>". $phno ."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>NRC</th>";
                        echo "<td colspan=4>". $nrc ."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>Birthday</th>";
                        echo "<td colspan=4>". $dob ."</td>";
                        echo "</tr>";

                        for($row=0;$row<sizeof($education);$row++)
                        {
                            echo "<tr>";
                            echo "<th>Degree :</th>";
                            echo "<td>" . $education[$row][0] ."</td>";
                            echo "<td>" . $education[$row][1] ."</td>";
                            echo "<td>" . $education[$row][2] ."</td>";
                            echo "<td>" . $education[$row][3] ."</td>";
                            echo "<tr>";
                        }

                        echo "<tr>";
                        echo "<th colspan='5'>*Successfully Upload* " . $certificate . "and" . $cv ."</th>";
                        echo "</tr>";
                        ?>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>