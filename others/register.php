 <?php include('server.php') ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/register.css">
</head>
<body >
  <div class="container"  id="navbar">
    
    
       <nav class="navbar navbar-dark  bg-dark navbar-expand-sm fixed-top">
             <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
               <span class="navbar-toggler-icon"></span> 
             </button>
             <a  class="navbar-brand mr-12" href="#"><img src="../assets/images/imgsidebar2.jpg" class="logo"></a>
               <div class="collapse navbar-collapse" id="Navbar">
               <ul class="navbar-nav mr-auto">
               <li class="nav-item"><a class="nav-link " href="../index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link " href="login.php">Sign In</a></li>
               <li class="nav-item active"><a class="nav-link " href="register.php">Register</a></li>
               <li class="nav-item"><a class="nav-link " href="#">Geekcode</a></li>
               </ul>
               </div>
             </div>
             </nav>
 </div>
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
          <label><h1 style="color: white;">Register Here!!!</h1></label>
        </div>
      </div>
      <form method="POST" action="register.php">
        <div class="form-group row">
        <div class="col-md-10 offset-md-1">
        <?php include('errors.php'); ?>
        </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-md-2 col-form-label offset-md-2" style="color:white;">Name</label>
          <div class="col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"   value="<?php echo $name; ?>" ></div>
        </div>
         <div class="form-group row">
          <label for="email" class="col-md-2 col-form-label offset-md-2" style="color:white;">Email</label>
          <div class="col-md-6"><input type="email" class="form-control" name="email"   id="email" placeholder="Enter Email"   value="<?php echo $email; ?>" ></div>
        </div>
         <div class="form-group row">
          <label for="regno" class="col-md-2 col-form-label offset-md-2" style="color:white;">Registration Number</label>
          <div class="col-md-6"><input type="text" class="form-control" name="regno"   id="regno" placeholder="Enter University Registration Number"   value="<?php echo $regno; ?>" ></div>
        </div>
         <div class="form-group row">
          <label for="username" class="col-md-2 col-form-label offset-md-2" style="color:white;">Username</label>
          <div class="col-md-6"><input type="text" class="form-control" name="username"   id="username" placeholder="Enter Username"   value="<?php echo $username; ?>" ></div>
        </div>
         <div class="form-group row">
          <label for="password_1" class="col-md-2 col-form-label offset-md-2" style="color:white;">Password</label>
          <div class="col-md-6"><input type="password" class="form-control" name="password_1"   id="password_1" placeholder="Enter Password"></div>
        </div>
        <div class="form-group row">
          <label for="password_2" class="col-md-2 col-form-label offset-md-2" style="color:white;">Confirm Password</label>
          <div class="col-md-6"><input type="password" class="form-control" name="password_2"   id="password_2" placeholder="Confirm Password"></div>
        </div>
        <div class="form-group row">
          <div class="col-md-2 offset-md-2">
            <input type="submit" class="btn btn-primary"   name="reg_user" value="Submit" onclick="myfunction()">
            <p style="color:white;">
            Already a member? <a href="login.php">Sign in</a>
            </p>
          </div>
          
        </div>
      </form>
    </div>

</body>
</html>
<script src="../assets/js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>