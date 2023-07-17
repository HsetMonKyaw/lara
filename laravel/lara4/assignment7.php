<?php
session_start();
if(isset($_POST['submit']))
{
    $item=$_POST['item'];

    for($row=0;$row<sizeof($_POST['item']);$row++)
    {
        $unit[$row][0]=$_POST['item'][$row];
        $unit[$row][1]=$_POST['price'][$row];
        $unit[$row][2]=$_POST['qty'][$row];
    }
     $_SESSION['unit']=$unit; 
     header('location:assign7_success.php?name=david'); 
    // echo '<script>location.href="assign7_success.php?name=david"</script>'; 
//  var_dump($unit);

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
                    <div id="unit">
                        <div class="row">               
                            <div class="col-md-2">
                                <label for="" class="form-label">Item</label>
                                <input type="text" name="item[]" id="" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Price</label>
                                <input type="number" name="price[]" id="" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Quantity</label>
                                <input type="number" name="qty[]" id="" class="form-control">
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
    <script src="js/assign7.js"></script>
</body>
</html>