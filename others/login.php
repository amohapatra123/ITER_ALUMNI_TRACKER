<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body{
      background-image: url("../assets/images/bg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
     #formarea{
        margin-top: 20px;
        border-radius: 10px;
        opacity: 0.5;
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
    .logo{
        width: 40px;
        height: 40px;
      }
      #header{
        margin-top: 90px;
        background-color:whitesmoke;
      }
  </style>
  
</head>
<body>
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
               <li class="nav-item active"><a class="nav-link " href="login.php">Sign In</a></li>
               <li class="nav-item"><a class="nav-link " href="register.php">Register</a></li>
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
    <div class="container"  style="background-color: white;" id="formarea">
      <div class="row">
        <div class="col-md-4  offset-md-4">
          <label><h1 style="color: black;">Login</h1></label>
        </div>
      </div>
      <form method="POST" action="login.php">
        <div class="form-group row">
        <div class="col-md-10 offset-md-1">
        <?php include('errors.php'); ?>
        </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-md-2 col-form-label offset-md-2" style="color:black;">Username</label>
          <div class="col-md-6"><input type="text" class="form-control" name="username" id="username" placeholder="Enter Username"></div>
        </div>
         <div class="form-group row">
          <label for="password" class="col-md-2 col-form-label offset-md-2" style="color:black;">Password</label>
          <div class="col-md-6"><input type="password" class="form-control" name="password"   id="password" placeholder="Enter password" ></div>
        </div>
        <div class="form-group row">
          <div class="col-md-2 offset-md-2">
            <input type="submit" class="btn btn-primary"   name="login_user" value="Login">
            <p style="color:black;">
           Not yet a member? <a   href="register.php">Sign up</a>
            </p>
          </div>
          
        </div>
      </form>
    </div>
	 
 <!--  <form method="post" action="login.php" style="color: grey; padding: 20px;">
  	<?php include('errors.php'); ?>
    
  	<div class="input-group">
  		<label style="color: grey; font-size: 25px;"><b>Username</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label style="color: grey; font-size: 25px;"><b>Password</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit"  style="font-size: 20px;width:100px;" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a  class="active" href="register.php">Sign up</a>
  	</p>
  </form> -->
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