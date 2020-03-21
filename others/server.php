<?php
session_start();
//new
require('../assets/PHPMailer/PHPMailerAutoload.php'); 
require('crediantial.php');
//new 

// initializing variables
$id="";
$name = "";
$email    = "";
$regno    ="";
$username = "";
//new 
 $status="";
 $token="";
//new
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'reg');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $regno = mysqli_real_escape_string($db, $_POST['regno']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  //new
  $token=(rand('10000','99999'));
  $status=0;

  //new 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  
  if (empty($regno)) { array_push($errors, "Registration number is required"); }
  if(empty($username)){ array_push($errors, "Username is required");}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username'   OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }



 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (name,email,regno,username, password,token,status) 
  			  VALUES('$name','$email','$regno','$username','$password','$token','$status')";
          //new 
         //sending otp

           $last_id = mysqli_insert_id($db);
           $url='http://'.$_SERVER['SERVER_NAME'].'/send-mail-phpmailer/verify.php?id='.$last_id.'&token='.$token;
          
           $output='<div>Thanks for registering.<br>Your OTP is<br>'.$token.'</div>';


          if($result==true){
           $mail = new PHPMailer;
           $mail->isSMTP();
           $mail->Host='smtp.gmail.com';
           $mail->SMTPAuth = true;
           $mail->Username =EMAIL;
           $mail->Password =PASS;
           $mail->SMTPSecure='tls';
           $mail->Port =587;
           $mail->setFrom(EMAIL,'ITER ALUMNI TRACKER');
           $mail->addAddress($email,$name);
           $mail->isHTML(true);
         


           $mail->Subject = 'Email verification';
           $mail->Body =$output;


            if(!$mail->send()){
             echo 'Message not sent.';
             echo 'Mailer Error: '.$mail->ErrorInfo;
            }else{
             echo 'Your registration is succesfull, please verify your email.';
            }


          }
//new
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: otpverification.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $type=mysqli_real_escape_string($db, $_POST['type']);
  

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' AND status=1";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results)==1) {
      while($row=mysqli_fetch_assoc($results)){



        if($row['type']=="Admin"){
          $_SESSION['username']=$username;
          header('Location:admin.php');

        }else{
          $_SESSION['username']=$username;
          header('Location:profile.php');

        }

      }
      
     //  $_SESSION['username'] = $username;
  	  // $_SESSION['success'] = "You are now logged in";
  	  // header('location: profile.php');
  
    
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}








//otp verification
if(isset($_POST['otp_user'])){
  $token=mysqli_real_escape_string($db,$_POST['token']);


  if(empty($token)){
    array_push($errors, "Enter the otp"); 
  }
  if(count($errors)==0){
    $querys="SELECT * FROM user WHERE token='$token'";
    $result1=mysqli_query($db,$querys);
    if(mysqli_num_rows($result1)==1){
     $querys1="UPDATE `user` SET   status=1 WHERE token='$_POST[token]'  ";
     $result2=mysqli_query($db,$querys1);
     if($result2){

      array_push($errors,"OTP Verified Successfully!!! You can login now ");
    }

     
    }else {
      array_push($errors, "Enter the valid OTP");
    }
  }






}







         



        





?>
