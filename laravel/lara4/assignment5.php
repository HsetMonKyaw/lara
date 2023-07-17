
<?php 
if(isset($_GET['submit']))
{
    if(empty($_GET['meter_no']))
      $meter_no_error="Please fill meter number!";
    else
      $meter_no=$_GET['meter_no'];

    if(empty($_GET['code_no']))
      $code_no_error="Please fill computer code!";
    else
      $code_no=$_GET['code_no'];

    if(empty($_GET['previous']))
      $previous_error="Please fill previous meter unit!";
    else
      $previous=$_GET['previous'];
      
    if(empty($_GET['current']))
      $current_error="Please fill current meter unit!";
    else
      $current=$_GET['current'];
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
            <div class="col-md-12 my-3">
                <label for="" class="form-label h4" >Meter Unit Form</label>
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="form-label">Meter No :</label>
                            <input type="text" name="meter_no" id="" class="form-control" value="<?php if(isset($meter_no)) echo $meter_no; ?>">
                            <span class="text-danger"><?php if(isset($meter_no_error)) echo $meter_no_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Computer Code :</label>
                            <input type="text" name="code_no" id="" class="form-control" value="<?php if(isset($code_no)) echo $code_no; ?>">
                            <span class="text-danger"><?php if(isset($code_no_error)) echo $code_no_error; ?></span>
                        </div>
                        <div class="col-md-4 my-4">
                            <button class="btn btn-primary" name="submit">Calculate</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="form-label" >Previous Meter Unit :</label>
                            <input type="number" min=1 name="previous" id="" class="form-control" value="<?php if(isset($previous)) echo $previous; ?>">
                            <span class="text-danger"><?php if(isset($previous_error)) echo $previous_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Current Meter Unit :</label>
                            <input type="number" name="current" id="" class="form-control" value="<?php if(isset($current)) echo $current; ?>">
                            <span class="text-danger"><?php if(isset($current_error)) echo $current_error; ?></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>