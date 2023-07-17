<?php
session_start();
if(isset($_POST['submit']))
{
    $degree=$_POST['degree']; //array
    // $education=[][];
    
    for($row=0;$row<sizeof($_POST['degree']);$row++)
    {
        $education[$row][0]=$_POST['degree'][$row];
        $education[$row][1]=$_POST['university'][$row];
        $education[$row][2]=$_POST['start'][$row];
        $education[$row][3]=$_POST['end'][$row];
    }
    $_SESSION['education']=$education; //session create
    // header('location:day7_success.php?name=david'); //redirect to another page
    echo '<script>location.href="day7_success.php?name=david"</script>'; //by script

    // var_dump($education);

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
            <div class="col-md-10">
                <form action="" method="post">
                    <div id="education">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="form-label">Degree Name</label>
                            <input type="text" name="degree[]" id="" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="" class="form-label">University Name</label>
                            <input type="text" name="university[]" id="" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="" class="form-label">Start Date</label>
                            <input type="date" name="start[]" id="" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="" class="form-label">End Date</label>
                            <input type="date" name="end[]" id="" class="form-control">
                        </div>
                        <div class="col-md-2 mt-4">
                            <button class="btn btn-primary" id="addbtn">Add More</button>
                        </div>
                    </div>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-success" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/day7.js"></script>
</body>
</html>