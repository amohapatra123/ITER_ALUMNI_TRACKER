
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
  </style>

</head>
<body>
  <!--the navbar section-->
   <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">

        <a href="https://www.soa.ac.in/iter" target="_blank" class="w3-hover-text-green"><img src="../assets/images/imgsidebar2.jpg" style="width:100%"></a>
        <a href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black"  id="updatebutton">
            <i class="fa fa-edit w3-xxlarge"></i>
            <p>UPDATE</p>
        </a>

        <a href="./login.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-sign-out w3-xxlarge"></i>
            <p>LOGOUT</p>
        </a>

       

       

        <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020-" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-code w3-xxlarge"></i>
            <p>GEEKCODE</p>
        </a>
    </nav>

<header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home">

            <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
            <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
            </h3>
            <p class="w3-text-green w3-arial"><b><h3 style="color:green">Welcome to Alumni Portal of ITER | Institute of Technical Education and Research</h3> </b></p>
</header>

<div class="container">
  
    
   <div id="bodycontent" style="margin:5% 20% 5% 20%;">
     <form action="profile.php" method="POST">
      <fieldset>
        <legend>Personal Detail</legend>
    <div class="form-group">
      <label>Email</label>
    <input type="email"  class="form-control" name="Email" placeholder="Enter Registered Email"/>
    </div>
    <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" class="form-control" name="dob" placeholder="Enter Your Date of Birth"/>
    </div>
    <div class="form-group">
    <label>Gender</label>
    <input type="text"  class="form-control" name="gender" placeholder="Enter Gender" />
    </div>
    <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter contact number"/>
    </div>
    <div class="form-group">
    <label>State</label>
    <input type="text"  class="form-control" name="state" placeholder="Enter state"/>
    </div>
    <div class="form-group">
    <label>District</label>
    <input type="text"  class="form-control" name="district" placeholder="Enter district"/>
    </div>
    <div class="form-group">
    <label>Locality</label>
    <input type="text"  class="form-control" name="locality" placeholder="Enter locality"/>
    </div>
    <div class="form-group">
    <label>Pincode</label>
    <input type="text" class="form-control" name="pincode" placeholder="Enter pincode"/>
    </div>
    </fieldset>
    <fieldset>
    <legend>Educational Detail</legend>  
    <div class="form-group">
    <label>Course</label>
    <input type="text" class="form-control" name="course" placeholder="Enter course"/>
    </div>
    <div class="form-group">
    <label>Passing year</label>
    <input type="text" class="form-control" name="year"   placeholder="Enter passing year"/>
    </div>
    <div class="form-group">
      <label>Branch</label>
    <input type="text" class="form-control" name="branch" placeholder="Enter branch opted"/>
    </div>
    <div class="form-group">
    <label>Section</label>
    <input type="text" class="form-control" name="sec" placeholder="Enter section"/>
    </div>
    </fieldset>
    <fieldset>
    <legend>Professional Detail</legend>
    <div class="form-group">
    <label>Organisation Name</label>
    <input type="text" class="form-control" name="orgname" placeholder="Enter organisation name"/>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="orgaddress" placeholder="Enter organisation address"/>
    </div>
    <div class="form-group">
    <label>Designation</label>
    <input type="text" class="form-control" name="designation" placeholder="Enter designation"/>
    </div>
    <div class="form-group">
    <label>Current State</label>
    <input type="text" class="form-control" name="cstate" placeholder="Enter current state"/>
    </div>
    <div class="form-group">
    <label>Current District</label>
    <input type="text" class="form-control" name="cdistrict" placeholder="Enter current district"/>
    </div>
    <div class="form-group">
    <label>Current Locality</label>
    <input type="text" class="form-control" name="clocality" placeholder="Enter current locality"/>
    </div>
    <div class="form-group">
    <label>Current Pincode</label>
    <input type="text" class="form-control" name="cpincode" placeholder="Enter current pincode"/>
    </div>
    <div class="form-group">
    <label>Organisation Contact</label>
    <input type="text" class="form-control" name="orgcontact" placeholder="Enter organisation contact"/>
    </div>
    <div class="form-group">
    <label>Organisation Email</label>  
    <input type="email" class="form-control" name="orgemail" placeholder="Enter Email"/>
    </div>
    <div class="form-group">
    <label>Organisation Fax</label>
    <input type="text" class="form-control" name="orgfax" placeholder="Enter organisation Fax"/>
    </div>
    </fieldset>
    <input type="submit" class="btn btn-primary" name="update" value="UPDATE" />
   </form>
  
   </div>
    
   <div id="bodycontent2">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
  </div>
</div>
		
</body>
</html>
<script >
  $(document).ready(function(){
 $("#bodycontent").hide();
  });
  $("#updatebutton").click(function(){
      $("#bodycontent").show();
      $('#bodycontent2').hide();
  });
</script>
  
<?php

$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'reg');
if(isset($_POST['update']))
 {
  //$Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $contact=$_POST['contact'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $locality=$_POST['locality'];
  $pincode=$_POST['pincode'];
  $course=$_POST['course'];
  $year=$_POST['year'];
  $branch=$_POST['branch'];
  $sec=$_POST['sec'];
  $orgname=$_POST['orgname'];
  $orgaddress=$_POST['orgaddress'];
  $designation=$_POST['designation'];
  $cstate=$_POST['cstate'];
  $cdistrict=$_POST['cdistrict'];
  $clocality=$_POST['clocality'];
  $cpincode=$_POST['cpincode'];
  $orgcontact=$_POST['orgcontact'];
  $orgemail=$_POST['orgemail'];
  $orgfax=$_POST['orgfax'];








$email=$_POST['Email'];

  $query = "UPDATE `user` SET dob='$dob',gender='$gender',contact='$contact',state='$state',district='$district',locality='$locality',pincode='$pincode',course='$course',year='$year',branch='$branch',sec='$sec',orgname='$orgname',orgaddress='$orgaddress',designation='$designation',cstate='$cstate',cdistrict='$cdistrict',clocality='$clocality',
     cpincode='$cpincode',orgcontact='$orgcontact',orgemail='$orgemail',orgfax='$orgfax' where email='$Email' ";
  
  $query_run = mysqli_query($connection,$query);
  
  if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Data Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Data Not Updated")</script>';
   }
 }
 

?>
