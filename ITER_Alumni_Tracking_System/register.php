 <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		body{
			background-image: url(imghome9.jpg);
	    background-repeat: no-repeat;
	    height:100vh;
	    width:100%;
	    background-size:cover;
	    background-attachment:fixed;

		}
		
		.me{
			background-color: black;

			width:600px;
			height: 1000px;
			
			padding: 50px;
			opacity: 0.8; 
			border-radius: 10px;
		}
		
	</style>
</head>
<body>
	 
    <div class="upperbackground">
     <center>
    <div class="me">
    	<label style="color:white;font-size: 30px;">Register Here....</label>
    <form method="post" action="register.php">
	    <?php include('errors.php'); ?>
  <div class="form-group">
    <label style="color:white;font-size:25px;">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name"  value="<?php echo $name; ?>">
   
  </div>
	     <div class="form-group">
    <label  style="color:white;font-size:25px;">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email"  value="<?php echo $email; ?>">
   
  </div>
  <div class="form-group">
    <label  style="color:white;font-size:25px;">Registration Number</label>
    <input type="text" class="form-control" name="regno" placeholder="Enter University Registration Number" value="<?php echo $regno; ?>">
  </div>
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
  </div>
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Password</label>
    <input type="password" class="form-control" name="password1" placeholder="Enter Password">
  </div>
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Confirm Password</label>
    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
  </div>
  <input type="submit" class="btn btn-primary" value="Submit">
	     <p style="color:white;">
      Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
    		
</div>
</center>
    </div>


</body>
</html>
