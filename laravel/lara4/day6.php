<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" class="css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="get">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Subject to be Attended<span color="text-danger">*</span></label>
                                <select name="program" class="form-select">
                                    <option value="mba">Master of Business Administration</option>
                                    <option value="bba">Master of Business Administration</option>
                                    <option value="bbs">Master of Business Administration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">                       
                      <div class="col-md-4">
                        <label for="" class="form-label">Name (Myanmar)</label>
                        <input type="text" name="name_mm" id="name_mm" class="form-control focused" autofocus>
                        <span class="text-danger" id="name_error"></span>
                      </div>
                      <div class="col-md-4">
                        <label for="" class="form-label">Name (English)</label>
                        <input type="text" name="name_eng" id="name_eng" class="form-control" value="">
                        <span class="text-danger" id="name_eng_error"></span>
                      </div>
                      <div class="col-md-4">
                        <label for="" class="form-label">Birthday</label>
                        <input type="date" name="dob" id="" class="form-control" value="">
                        <span class="text-danger" id=""></span>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4">                       
                        <label for="">Nationality</label><br>
                        <input type="radio" name="race" id="mm" value="mm" class="form-check-input"><label for=""  class="form-check-label">Myanmar</label><br>
                        <input type="radio" name="race" id="othernation" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label>
                        <div id="other_nation" class="d-none">
                            <input type="text" name="" id="" class="form-control">
                        </div>       
                       </div> 
                       <div class="col-md-4">                    
                          <label for="">Marital status</label><br>  
                             <input type="radio" name="marital" id="marital" value="marriage" class="form-check-input"><label for="" class="form-check-label">Marriage</label><br>
                             <input type="radio" name="marital" id="single" value="single" class="form-check-input"><label for=""  class="form-check-label">Single</label><br>
                             <input type="radio" name="marital" id="other" value="other" class="form-check-input"><label for=""  class="form-check-label">Other</label> 
                            <div id="other_marital" class="d-none">
                             <input type="text" class="form-control">  
                            </div>             
                        </div>
                        <div class="col-md-4">                    
                          <label for="">Gender</label><br>
                           <input type="radio" name="gender" id="male" value="male" class="form-check-input"><label for=""  class="form-check-label">Male</label><br>
                           <input type="radio" name="gender" id="female" value="female" class="form-check-input"><label for=""  class="form-check-label">Female</label><br>
                           <input type="radio" name="gender" id="othergender" value="other" class="form-check-input"><label for="" class="form-check-label">Other</label>
                           <div id="other_gender" class="d-none">
                            <input type="text" class="form-control">
                           </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                           <button class="btn btn-primary" name="submit">Register</button>
                        </div>
                    </div>
                </form>       
            </div>
        </div> 
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/myscript.js"></script>
</body>
</html>