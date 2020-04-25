<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>OTP Verifiation</title>
  <link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
     #formarea{
        margin-top: 20px;
        border-radius: 10px;
        opacity: 0.8;
      }
      .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
  </style>

</head>
<body>
	
   <div class="container" id="header">
      <div class="container" id="heading" style="padding: 10px;">
        <div class="row">
          <div class="col-sm-12 col-lg-12" style="text-align: center;background-color:#2196f3;">
            <h1 style="color:white;font-size: 50px;">Siksha 'O' Anusandhan</h1>
              </div>
              <div class="col-sm-12 col-lg-12">
                <h4 style="text-align: center;">(Deemed to be University)</h4>
              </div>
              <div class="col-sm-12 col-lg-12">
                <b><h3 style="color:green; text-align: center;">ITER Alumni Tracker<br>
                Institute of Technical Education and Research</h3> </b>

              </div>
          </div>
      </div>
    </div>
    <div class="container"  style="background-color: black;" id="formarea">
      <div class="row">
        <div class="col-md-4  offset-md-4">
          <label><h1 style="color: white;">OTP Verification</h1></label>
        </div>
      </div>
      <form method="POST" action="otpverification.php">
        <div class="form-group row">
        <div class="col-md-10 offset-md-1">
        <?php include('errors.php'); ?>
        </div>
        </div>
        <div class="form-group row">
          <label for="otp" class="col-md-2 col-form-label offset-md-2" style="color:white;">OTP</label>
          <div class="col-md-6"><input type="text" class="form-control" name="token" id="otp" placeholder="Enter OTP"></div>
        </div>
        
        <div class="form-group row">
          <div class="col-md-2 offset-md-2">
            <input type="submit" class="btn btn-primary"   name="otp_user" value="Verify" style="margin:10px;">
            
          </div>
          
        </div>
      </form>
    </div>
	 
  <!-- <form method="post" action="otpverification.php" style="color: grey; padding: 20px;">
  	 <?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="color: grey; font-size: 25px;"><b>OTP</b></label>
  		<input type="text" name="token" placeholder="Enter OTP" >
  	</div>
  	
  	<div class="input-group">
  		<button type="submit"   style="font-size: 20px;width:100px;" class="btn btn-primary" name="otp_user">Verify</button>
      
  	</div>
  	
  </form> -->
</body>
</html>
<script src="../assets/js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>
