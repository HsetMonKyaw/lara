<?php
if(isset($_GET['submit']))
{
  if(empty($_GET['name_mm']))
  $name_mm_error="Please fill your name in myanmar!";
  else
  $name_mm=$_GET['name_mm'];  

  if(empty($_GET['name_eng']))
  $name_eng_error="Please fill your name in english!";
  else
  $name_eng=$_GET['name_eng'];

  if(empty($_GET['dob']))
  $dob_error="Please choose your dob!";
  else
  $dob=$_GET['dob'];
  

  if(empty($_GET['race']))
  $race_error="Please choose your nation";
  else
  $race=$_GET['race'];

  if(empty($_GET['marital']))
  $marital_error="Please choose your marital";
  else
  $marital=$_GET['marital'];

  if(empty($_GET['gender']))
  $gender_error="Please choose your gender";
  else
  $gender=$_GET['gender'];

  if(empty($_GET['email']))
  $email_error="Please enter your email";
  else
  $email=$_GET['email'];

  if(empty($_GET['phno']))
  $phno_error="Please fill your Phone number";
  else
  $phno=$_GET['phno'];

  if(empty($_GET['nrc']))
  $nrc_error="Please fill your NRC number";
  else
  $nrc=$_GET['nrc'];

  if(empty($_GET['fb']))
  $fb_error="Please enter your Facebook";
  else
  $fb=$_GET['fb'];

  if(empty($_GET['address']))
  $address_error="Please fill your Address";
  else
  $address=$_GET['address'];

  if(empty($_GET['viber']))
  $viber_error="Please enter your Viber";
  else
  $viber=$_GET['viber'];

  if(empty($_GET['township']))
  $town_error="Please fill your Township";
  else
  $town=$_GET['township'];

  if(empty($_GET['city']))
  $city_error="Please fill your City";
  else
  $city=$_GET['city'];

  if(empty($_GET['region']))
  $region_error="Please fill your Region";
  else
  $region=$_GET['region'];

  if(empty($_GET['postal']))
  $postal_error="Please fill your Postal number";
  else
  $postal=$_GET['postal'];

  if(empty($_GET['country']))
  $country_error="Please fill your Country";
  else
  $country=$_GET['country'];

  if(empty($_GET['contact']))
  $contact_error="Please select Contact";
  else
  $contact=$_GET['contact'];
 
  // $name_eng=$_GET['name_eng'];
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
    <link rel="stylesheet" href="css/assign6css.css">
</head>
<body>
    <div class="container">
        <h1>School Application Form</h1><br>
        <ul id="progressbar">
            <li class="active" id="progress">Account Setup</li>
            <li id="progress1">Social Profiles</li>
            <li id="progress2">Personal Details</li>
            <li id="progress3">Work Experience</li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="" id="row1">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Subject to be Attended <span class="text-danger">*</span></label>
                                <select name="program" class="form-select" id="">
                                    <option value="mba">Master of Business Administration</option>
                                    <option value="bba">Master of Business Administration</option>
                                    <option value="bbs">Master of Business Administration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="" class="form-label">Name(Myanmar) <span class="text-danger">*</span></label>
                            <input type="text" name="name_mm" id="" class="form-control" value="<?php if(isset($name_mm)) echo $name_mm; ?>">
                            <span class="text-danger"><?php if(isset($name_mm_error)) echo $name_mm_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name(English) <span class="text-danger">*</span></label>                           
                            <input type="text" name="name_eng" id="" class="form-control" value="<?php if(isset($name_eng)) echo $name_eng; ?>">
                            <span class="text-danger"><?php if(isset($name_eng_error)) echo $name_eng_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Birthday <span class="text-danger">*</span></label>
                            <input type="date" name="dob" id="" class="form-control" value="<?php if(isset($dob)) echo $dob;?>">
                            <span class="text-danger"><?php if(isset($dob_error)) echo $dob_error ?></span>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nationality <span class="text-danger">*</span></label><br>
                                <?php
                                if(isset($race) && $race=="mm")
                                {
                                    echo '<input type="radio" name="race" id="mm" value="mm" class="form-check-input" checked><label for=""  class="form-check-label">Myanmar</label><br>';
                                    echo '<input type="radio" name="race" id="othernation" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>';
                                }
                                else if(isset($race) && $race=="other")
                                {
                                    echo '<input type="radio" name="race" id="mm" value="mm" class="form-check-input"><label for=""  class="form-check-label">Myanmar</label><br>';
                                    echo '<input type="radio" name="race" id="othernation" value="other" class="form-check-input" checked><label for=""  class="form-check-label">Other</label>';
                                }
                                else
                                {
                                    echo '<input type="radio" name="race" id="mm" value="mm" class="form-check-input"><label for=""  class="form-check-label">Myanmar</label><br>';
                                    echo '<input type="radio" name="race" id="othernation" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>';
                                }
                                ?>
                                <!-- <input type="radio" name="race" id="mm" value="mm" class="form-check-input"><label for=""  class="form-check-label">Myanmar</label><br>
                                <input type="radio" name="race" id="othernation" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label> -->
                                <br><span class="text-danger"><?php if(isset($race_error)) echo $race_error; ?></span>
                                <div id="other_nation" class="d-none">
                                    <input type="text" class="form-control">
                                </div>                                 
                            </div>
                            <div class="col-md-4">
                                <label for="">Maritel Status <span class="text-danger">*</span></label><br>
                                <?php
                                if(isset($marital) && $marital=="marriage")
                                {
                                    echo '<input type="radio" name="marital" id="marital" value="marriage" class="form-check-input" checked><label for="" class="form-check-label">Marriage</label><br>';
                                    echo '<input type="radio" name="marital" id="single" value="single" class="form-check-input"><label for=""  class="form-check-label">Single</label><br>';
                                    echo '<input type="radio" name="marital" id="other" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>';
                                }
                                else if(isset($marital) && $marital=="single")
                                {
                                    echo '<input type="radio" name="marital" id="marital" value="marriage" class="form-check-input"><label for="" class="form-check-label">Marriage</label><br>';
                                    echo '<input type="radio" name="marital" id="single" value="single" class="form-check-input" checked><label for=""  class="form-check-label">Single</label><br>';
                                    echo '<input type="radio" name="marital" id="other" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>';
                                }
                                elseif(isset($marital) && $marital=="other")
                                {
                                    echo '<input type="radio" name="marital" id="marital" value="marriage" class="form-check-input"><label for="" class="form-check-label">Marriage</label><br>';
                                    echo '<input type="radio" name="marital" id="single" value="single" class="form-check-input"><label for=""  class="form-check-label">Single</label><br>';
                                    echo '<input type="radio" name="marital" id="other" value="other" class="form-check-input"checked><label for=""  class="form-check-label">Other</label>';
                                }
                                else
                                {
                                    echo '<input type="radio" name="marital" id="marital" value="marriage" class="form-check-input"><label for="" class="form-check-label">Marriage</label><br>';
                                    echo '<input type="radio" name="marital" id="single" value="single" class="form-check-input"><label for=""  class="form-check-label">Single</label><br>';
                                    echo '<input type="radio" name="marital" id="other" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>';
                                }
                                ?>
                                <!-- <input type="radio" name="marital" id="marital" value="marriage" class="form-check-input"><label for="" class="form-check-label">Marriage</label><br>
                                <input type="radio" name="marital" id="single" value="single" class="form-check-input"><label for=""  class="form-check-label">Single</label><br>
                                <input type="radio" name="marital" id="other" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label> -->
                                <br><span class="text-danger"><?php if(isset($marital_error)) echo $marital_error; ?></span>
                                <div id="other_marital" class="d-none">                                   
                                    <input type="text" class="form-control">
                                </div>                                                                                            
                            </div>
                            <div class="col-md-4">
                                <label for="">Gender</label><br>
                                <?php 
                                if(isset($gender) && $gender=="male")
                                {
                                    echo '<input type="radio" name="gender" id="male" value="male" class="form-check-input" checked><label for=""  class="form-check-label">Male</label><br>';
                                    echo '<input type="radio" name="gender" id="female" value="female" class="form-check-input"><label for=""  class="form-check-label">Female</label><br>';
                                    echo '<input type="radio" name="gender" id="othergender" value="other" class="form-check-input"><label for="" class="form-check-label">Other</label>';
                                }
                                elseif(isset($gender) && $gender=="female")
                                {
                                    echo '<input type="radio" name="gender" id="male" value="male" class="form-check-input"><label for=""  class="form-check-label">Male</label><br>';
                                    echo '<input type="radio" name="gender" id="female" value="female" class="form-check-input" checked><label for=""  class="form-check-label">Female</label><br>';
                                    echo '<input type="radio" name="gender" id="othergender" value="other" class="form-check-input"><label for="" class="form-check-label">Other</label>';
                                }
                                elseif(isset($gender) && $gender=="other")
                                {
                                    echo '<input type="radio" name="gender" id="male" value="male" class="form-check-input"><label for=""  class="form-check-label">Male</label><br>';
                                    echo '<input type="radio" name="gender" id="female" value="female" class="form-check-input"><label for=""  class="form-check-label">Female</label><br>';
                                    echo '<input type="radio" name="gender" id="othergender" value="other" class="form-check-input" checked><label for="" class="form-check-label">Other</label>';
                                }                         
                                else
                                {
                                    echo '<input type="radio" name="gender" id="male" value="male" class="form-check-input"><label for=""  class="form-check-label">Male</label><br>';
                                    echo '<input type="radio" name="gender" id="female" value="female" class="form-check-input"><label for=""  class="form-check-label">Female</label><br>';
                                    echo '<input type="radio" name="gender" id="othergender" value="other" class="form-check-input"><label for="" class="form-check-label">Other</label>';
                                }
                                ?>  
                                <!-- <input type="radio" name="gender" id="male" value="male" class="form-check-input"><label for=""  class="form-check-label">Male</label><br>
                                <input type="radio" name="gender" id="female" value="female" class="form-check-input"><label for=""  class="form-check-label">Female</label><br>
                                <input type="radio" name="gender" id="othergender" value="other" class="form-check-input"><label for="" class="form-check-label">Other</label> -->
                                <br><span class="text-danger"><?php if(isset($gender_error)) echo $gender_error; ?></span> 
                                <div id="other_gender" class="d-none">                                                                                  
                                    <input type="text" class="form-control">
                                </div>                                                         
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">
                                <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="" class="form-control" value="<?php if(isset($email)) echo $email; ?>"> 
                                <span class="text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>                           
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">PhoneNo <span class="text-danger">*</span></label>
                                <input type="text" name="phno" id="" class="form-control" value="<?php if(isset($phno)) echo $phno; ?>"> 
                                <span class="text-danger"><?php if(isset($phno_error)) echo $phno_error; ?></span>     
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">NRC Number (or) Passport Number <span class="text-danger">*</span></label>
                                <input type="text" name="nrc" id="" class="form-control" value="<?php if(isset($nrc)) echo $nrc; ?>"> 
                                <span class="text-danger"><?php if(isset($nrc_error)) echo $nrc_error; ?></span> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Facebook <span class="text-danger">*</span></label>
                                <input type="text" name="fb" id="" class="form-control" value="<?php if(isset($fb)) echo $fb; ?>"> 
                                <span class="text-danger"><?php if(isset($fb_error)) echo $fb_error; ?></span> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="" class="form-control" value="<?php if(isset($address)) echo $address; ?>">
                                <small>Home and Road</small>
                                <br><span class="text-danger"><?php if(isset($address_error)) echo $address_error; ?></span>  
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Viber / WhatsApp No</label>
                                <input type="text" name="viber" id="" class="form-control" value="<?php if(isset($viber)) echo $viber; ?>">
                                <span class="text-danger"><?php if(isset($viber_error)) echo $viber_error; ?></span>
                            </div>
                        </div> 
                        <div class="row my-2">
                            <div class="col-md-6 my-4">                               
                                <input type="text" name="township" id="" class="form-control" value="<?php if(isset($town)) echo $town; ?>">
                                <small>Township</small>
                                <br><span class="text-danger"><?php if(isset($town_error)) echo $town_error; ?></span>                                                                             
                                <div class="row my-4">
                                        <div class="col-4">                                            
                                            <input type="text" name="city" id="" class="form-control" value="<?php if(isset($city)) echo $city; ?>">
                                            <small>City</small>
                                            <br><span class="text-danger"><?php if(isset($city_error)) echo $city_error; ?></span>
                                        </div>
                                        <div class="col-4">                                           
                                            <input type="text" name="region" id="" class="form-control" value="<?php if(isset($region)) echo $region; ?>">
                                            <small>Region/State</small>
                                            <br><span class="text-danger"><?php if(isset($region_error)) echo $region_error; ?></span>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="postal" id="" class="form-control" value="<?php if(isset($postal)) echo $postal; ?>">
                                            <small>Postal No</small>
                                            <br><span class="text-danger"><?php if(isset($postal_error)) echo $postal_error; ?></span>
                                        </div>
                                </div>
                                <div class="row p-3">                       
                                        <select name="country" class="form-select" id="" value="<?php if(isset($country)) echo $country; ?>"> 
                                            <option selected></option> 
                                            <option value="">Afghanistan</option>
                                            <option value="">Haiti</option>                                          
                                            <option value="">Holy See</option>
                                            <option value="">Honduras</option>
                                            <option value="">Hong Kong</option>
                                            <option value="">Iceland</option>
                                            <option value="">India</option>
                                            <option value="">Indonesia</option>
                                            <option value="">Ireland</option>
                                            <option value="">Italy</option>
                                            <option value="">Japan</option>
                                            <option value="">South Korea</option>
                                            <option value="">Laos</option>
                                            <option value="">Makao</option>
                                            <option value="">Malaysia</option>
                                            <option value="">Mali</option>
                                            <option value="">Mexico</option>
                                            <option value="">Mongolia</option>                                          
                                            <option value="">Myanmar</option>
                                            <option value="">South Africa</option>
                                            <option value="">Australia</option>
                                            <option value="">Thailand</option>
                                            <option value="">United Kingdom</option>
                                            <option value="">Unite States</option>
                                            <option value="">Vietnam</option>
                                            <option value="">Brunei</option>
                                            <option value="">Cambodia</option>
                                        </select> 
                                        <small>Country</small>
                                        <br><span class="text-danger"><?php if(isset($country_error)) echo $country_error; ?></span>                                                  
                                </div>                                                              
                            </div>
                            <div class="col-md-6">
                                <label for="" name="contact" class="form-label" value="<?php if(isset($contact)) echo $contact; ?>">လူကြီးမင်းထံဆက်သွယ်ရန်အဆင်ပြေဆုံးသောဆက်သွယ်မှူပုံစံ <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Facebook</label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Viber</label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Phone</label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Email</label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Whatsapp</label><br>
                                <input type="checkbox" name="" id="" value="" class="form-check-input"><label for="" class="form-check-label">Other</label>
                                <br><span class="text-danger"><?php if(isset($contact_error)) echo $contact_error; ?></span>
                            </div>
                        </div> 
                        <div class="row my-3">
                            <div class="col=md-2">
                                <button class="btn btn-primary" id="register" value="submit" name="submit">Register</button>
                            </div>
                        </div>                
                </form>
            </div>
        </div>
    </div>
    <form action="" id="row2" class="bg-light p-4">
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="submit2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <form action="" id="row3" class="bg-warning rounded-3 p-3">
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <button class="btn btn-primary" id="submit3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <form action="" id="row4" class="bg-secondary rounded-3 p-3">
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <button class="btn btn-primary" id="submit4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/assign6script.js"></script>
</body>
</html>