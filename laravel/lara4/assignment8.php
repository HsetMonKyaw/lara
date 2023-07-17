<?php
session_start();
if(isset($_POST['submit']))
{
    for($row=0;$row<sizeof($_POST['degree']);$row++)
    {
        $education[$row][0]=$_POST['degree'][$row];
        $education[$row][1]=$_POST['university'][$row];
        $education[$row][2]=$_POST['start'][$row];
        $education[$row][3]=$_POST['end'][$row];
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $nrc=$_POST['nrc'];
    $dob=$_POST['dob'];
    $certificate=$_FILES['certificate']['name'];
    $cv=$_FILES['cv']['name'];
    $_SESSION['education']=$education;
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['phno']=$phno;
    $_SESSION['nrc']=$nrc;
    $_SESSION['dob']=$dob;
    $_SESSION['certificate']=$certificate;
    $_SESSION['cv']=$cv;
}


if(isset($_POST['submit']))
{
    if(empty($_POST['name'])){
    $name_error="Please Fill Your Name";
    }
    else{
    $name=$_POST['name'];
    }

    if(empty($_POST['email'])){
    $email_error="Please Enter Your Email";
    }
    else{
    $email=$_POST['email'];
    }

    if(empty($_POST['phno'])){
    $phno_error="Please Fill Your Phone Number";
    }
    else{
    $phno=$_POST['phno'];
    }

    if(empty($_POST['nrc'])){
    $nrc_error="Please Fill Your NRC";
    }
    else{
    $nrc=$_POST['nrc'];
    }

    if(empty($_POST['dob'])){
    $dob_error="Please Fill Your Birthday";
    }
    else{
    $dob=$_POST['dob'];
    }

    if(empty($_POST['degree[]'])){
        $degree_error="Please Fill Your Degree Name";
    }
    else{
        $degree=$_POST['degree[]'];
    }

    if(empty($_POST['university[]'])){
        $university_error="Please Fill Your University Name";
    }
    else{
        $university=$_POST['university[]'];
    }

    if(empty($_POST['start[]'])){
        $start_error="Please Fill Your Start Date";
    }
    else{
        $start=$_POST['start[]'];
    }

    if(empty($_POST['end[]'])){
        $end_error="Please Fill Your End Date";
    }
    else{
        $end=$_POST['end[]'];
    }

    if(empty($_POST['certificate'])){
        $certificate_error="Please Fill Your Certificate";
    }
    else{
        $certificate=$_POST['certificate'];
    }

    if(empty($_POST['cv'])){
        $cv_error="Please Fill Your CV Form";
    }
    else{
        $cv=$_POST['cv'];
    }
    
}

if(isset($_POST['upload1']))
{
    $filename=$_FILES['certificate']['name'];
    $filetype=$_FILES['certificate']['type'];
    $filesize=$_FILES['certificate']['size'];
    $file_tmp=$_FILES['certificate']['tmp_name'];

    $file_extensions=explode('.',$filename);
    // var_dump($file_extensions);
    $actual_extension=end($file_extensions);
    $allowed_files=['png','jpg','jpeg','svg'];
    $max_size=2000000;
     if(in_array(strtolower($actual_extension),$allowed_files))
    {
        if($filesize<=$max_size)
        {
            $new_filename=time().$filename;
            move_uploaded_file($file_tmp,'photos/'.$new_filename);
        }
        else
        {
            echo "File exceeds max size(2M)";
        }
    }
    else
    {
        echo "File type is not allowed";
    }
}   

if(isset($_POST['upload2']))
{
    $filename=$_FILES['cv']['name'];
    $filetype=$_FILES['cv']['type'];
    $filesize=$_FILES['cv']['size'];
    $file_tmp=$_FILES['cv']['tmp_name'];

    $file_extensions=explode('.',$filename);
    // var_dump($file_extensions);
    $actual_extension=end($file_extensions);
    $allowed_files=['png','jpg','jpeg','svg'];
    $max_size=2000000;
    if(in_array(strtolower($actual_extension),$allowed_files))
    {
        if($filesize<=$max_size)
        {
            $new_filename=time().$filename;
            move_uploaded_file($file_tmp,'uploads/'.$new_filename);
        }
        else
        {
            echo "File exceeds max size(2M)";
        }
    }
    else
    {
        echo "File type is not allowed";
    }
}

if(isset($_POST['submit'])){
    if(empty($_POST['name']))
    {
        $name_error="Please Fill Your Name";
    }
    elseif(empty($_POST['email']))
    {
        $email_error="Please Enter Your Email";
    }
    elseif(empty($_POST['phno']))
    {
        $phno_error="Please Fill Your Phone Number";
    }
    elseif(empty($_POST['nrc']))
    {
        $nrc_error="Please Fill Your NRC";
    }
    elseif(empty($_POST['dob']))
    {
        $dob_error="Please Fill Your Birthday";
    }
    else
    {
        $item[0]=$_POST['name'];
        $item[1]=$_POST['email'];
        $item[2]=$_POST['phno'];
        $item[3]=$_POST['nrc'];
        $item[4]=$_POST['dob'];

        $_SESSION['item']=$item;
        echo '<script>location.href="assign8_success.php?"</script>';
    }

}

// if(isset($_POST['submit']))
// {
//         $item[0]=$_POST['name'];
//         $item[1]=$_POST['email'];
//         $item[2]=$_POST['phno'];
//         $item[3]=$_POST['nrc'];
//         $item[4]=$_POST['dob'];

//     $_SESSION['item']=$item; //session create
//     header('location:assign8_success.php?name=Wang'); //redirect to another page
//     // echo '<script>location.href="assign8_success.php?name=Wang"</script>'; //by script
// }


// if(isset($_POST['submit']))
// {
//     $name=$_POST['name'];

//     for($row=0;$row<sizeof($_POST['name']);$row++)
//     {
//         $item[$row][0]=$_POST['name'][$row];
//         $item[$row][1]=$_POST['email'][$row];
//         $item[$row][2]=$_POST['phno'][$row];
//         $item[$row][2]=$_POST['nrc'][$row];
//         $item[$row][2]=$_POST['dob'][$row];
//     }
//      $_SESSION['item']=$item; 
//      header('location:assign8_success.php?name=Wang');
// }

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
            <div class="col-md-12">
                <form action="" enctype="multipart/form-data" method="post">
                    <div id="item">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name)) echo $name; ?>">
                                <span class="nameerror text-danger"><?php if(isset($name_error)) echo $name_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
                                <span class="emailerror text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="number" name="phno" id="phno" class="form-control" value="<?php if(isset($phno)) echo $phno; ?>">
                                <span class="phnoerror text-danger"><?php if(isset($phno_error)) echo $phno_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">NRC</label>
                                <input type="text" name="nrc" id="nrc" class="form-control" value="<?php if(isset($nrc)) echo $nrc; ?>">
                                <span class="nrcerror text-danger"><?php if(isset($nrc_error)) echo $nrc_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Birthday</label>
                                <input type="date" name="dob" id="dob" class="form-control" value="<?php if(isset($dob)) echo $dob; ?>">
                                <span class="doberror text-danger"><?php if(isset($dob_error)) echo $dob_error; ?></span>
                            </div>
                        </div> 
                    </div>
                    <div class="row my-3">
                        <div id="education">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="form-label">Degree Name</label>
                                <input type="text" name="degree[]0" id="degree0" class="form-control" value="<?php if(isset($degree)) echo $degree; ?>">
                                <span class="error text-danger"><?php if(isset($degree_error)) echo $degree_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">University Name</label>
                                <input type="text" name="university[]0" id="university0" class="form-control" value="<?php if(isset($university)) echo $university; ?>">
                                <span class="error text-danger"><?php if(isset($university_error)) echo $university_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Start Date</label>
                                <input type="date" name="start[]0" id="start0" class="form-control" value="<?php if(isset($start)) echo $start; ?>">
                                <span class="error text-danger"><?php if(isset($start_error)) echo $start_error; ?></span>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">End Date</label>                             
                                <input type="date" name="end[]0" id="end0" class="form-control" value="<?php if(isset($end)) echo $end; ?>">
                                <span class="error text-danger"><?php if(isset($end_error)) echo $end_error; ?></span>
                            </div>
                            <div class="col-md-2 my-4">
                                <button class="btn btn-primary" id="addbtn" name="addmore">Add More</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <div>
                                   <label for="" class="form-label">Certificate Form</label>
                                   <input type="file" name="certificate" id="" class="form-control" value="<?php if(isset($certificate)) echo $certificate; ?>">
                                   <span class="text-danger"><?php if(isset($certificate_error)) echo $certificate_error; ?></span>
                                </div>
                                <div class="my-3">
                                    <button class="btn btn-primary" name="upload1">Upload</button>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div>
                                   <label for="" class="form-label">CV Form</label>
                                   <input type="file" name="cv" id="" class="form-control" value="<?php if(isset($cv)) echo $cv; ?>"> 
                                   <span class="text-danger"><?php if(isset($cv_error)) echo $cv_error; ?></span>
                                </div>
                                <div class="my-3">
                                    <button class="btn btn-primary" name="upload2">Upload</button>
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
    <script src="js/assign8.js"></script>
</body>
</html>