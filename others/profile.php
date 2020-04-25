<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../assets/css/profile.css">
</head>
<body>

<body>
  <!-- navbar -->
   <div class="container"  id="navbar">
    
    
       <nav class="navbar navbar-dark  bg-dark navbar-expand-sm fixed-top">
             <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
               <span class="navbar-toggler-icon"></span> 
             </button>
             <a  class="navbar-brand mr-12" href="../index.html"><img src="../assets/images/imgsidebar2.jpg" class="logo"></a>
               <div class="collapse navbar-collapse" id="Navbar">
               <ul class="navbar-nav mr-auto">
               <li class="nav-item"><a class="nav-link " href="../index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link " href="#" id="updatebutton">Update</a></li>
               <li class="nav-item"><a class="nav-link " href="login.php">Logout</a></li>
               <li class="nav-item"><a class="nav-link " href="#">Geekcode</a></li>
               </ul>
               </div>
             </div>
             </nav>
 </div>
 <!-- header -->
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
    <!-- update options -->
    <div class="container" id="showupdatearea" >
      <div class="row">
        <div class="col-md-3 offset-md-2"><button class="btn btn-dark" id="updatepersonal">Personal Info</button></div>
        <div class="col-md-3"><button class="btn btn-dark" id="updateeducational">Educational Info</button></div>
        <div class="col-md-3"><button class="btn btn-dark" id="updateprofessional">Professional Info</button></div>
      </div>

    </div>
     <!-- update personal -->
     <div class="container formmargin" id="personal">
       <form method="POST" action="profile.php">
         <div class="form-group row">
           <label for="email" class="col-md-2 col-form-label offset-md-2">Registered Email</label>
           <input type="email" class="col-md-6 form-control" name="Email" id="email" placeholder="Enter Email" >
         </div>
         <fieldset>
           <legend class="col-md-12 offset-md-2">Personal Information</legend>
           <div class="form-group row">
             <label for="dob" class="col-md-2 col-form-label offset-md-2">Date of birth</label>
             <input type="date" class="col-md-6 form-control" name="dob" id="dob" placeholder="Enter Dob">
           </div>
            <div class="form-group row">
             <label for="gender" class="col-md-2 col-form-label offset-md-2">Gender</label>
             <input type="text" class="col-md-6 form-control" name="gender" id="gender" placeholder="Enter Gender">
           </div>
            <div class="form-group row">
             <label for="contact" class="col-md-2 col-form-label offset-md-2">Contact</label>
             <input type="text" class="col-md-6 form-control" name="contact" id="contact" placeholder="Enter Contact Number">
           </div>
            <div class="form-group row">
             <label for="state" class="col-md-2 col-form-label offset-md-2">State</label>
             <input type="text" class="col-md-6 form-control" name="state" id="state" placeholder="Enter State">
           </div>
            <div class="form-group row">
             <label for="district" class="col-md-2 col-form-label offset-md-2">District</label>
             <input type="text" class="col-md-6 form-control" name="district" id="district" placeholder="Enter District">
           </div>
            <div class="form-group row">
             <label for="locality" class="col-md-2 col-form-label offset-md-2">Locality</label>
             <input type="text" class="col-md-6 form-control" name="locality" id="locality" placeholder="Enter Locality">
           </div>
            <div class="form-group row">
             <label for="pincode" class="col-md-2 col-form-label offset-md-2">Pincode</label>
             <input type="text" class="col-md-6 form-control" name="pincode" id="pincode" placeholder="Enter Pincode">
           </div>
           <div class="form-group row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-primary offset-md-6" name="updateper" value="Update">
             </div>
           </div>
         </fieldset>
       </form>
     </div>
    <!-- update educational -->
     <div class="container formmargin" id="updateedu">
       <form method="POST" action="profile.php">
         <div class="form-group row">
           <label for="email" class="col-md-2 col-form-label offset-md-2">Registered Email</label>
           <input type="email" class="col-md-6 form-control" name="Email" id="email" placeholder="Enter Email" >
         </div>
         <fieldset>
           <legend class="col-md-12 offset-md-2">Educational Information</legend>
           <div class="form-group row">
             <label for="course" class="col-md-2 col-form-label offset-md-2">Course</label>
             <input type="course" class="col-md-6 form-control" name="course" id="course" placeholder="Enter Course Detail">
           </div>
            <div class="form-group row">
             <label for="year" class="col-md-2 col-form-label offset-md-2">Passing Year</label>
             <input type="text" class="col-md-6 form-control" name="year" id="year" placeholder="Enter Passing Year">
           </div>
            <div class="form-group row">
             <label for="branch" class="col-md-2 col-form-label offset-md-2">Branch</label>
             <input type="text" class="col-md-6 form-control" name="branch" id="branch" placeholder="Enter Branch">
           </div>
            <div class="form-group row">
             <label for="sec" class="col-md-2 col-form-label offset-md-2">Section</label>
             <input type="text" class="col-md-6 form-control" name="sec" id="sec" placeholder="Enter Section">
           </div>
            <div class="form-group row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-primary offset-md-6" name="updateeducational" value="Update">
             </div>
           </div>
         </fieldset>
       </form>
     </div>
  <!-- update professional -->
    <div class="container formmargin" id="updatepro">
       <form method="POST" action="profile.php">
         <div class="form-group row">
           <label for="email" class="col-md-2 col-form-label offset-md-2">Registered Email</label>
           <input type="email" class="col-md-6 form-control" name="Email" id="email" placeholder="Enter Email" >
         </div>
         <fieldset>
           <legend class="col-md-12 offset-md-2">Professional Information</legend>
           <div class="form-group row">
             <label for="orgname" class="col-md-2 col-form-label offset-md-2">Organisation Name</label>
             <input type="text" class="col-md-6 form-control" name="orgname" id="orgname" placeholder="Enter Organisation Name">
           </div>
            <div class="form-group row">
             <label for="orgaddress" class="col-md-2 col-form-label offset-md-2">Organisation Address</label>
             <input type="text" class="col-md-6 form-control" name="orgaddress" id="orgaddress" placeholder="Enter Organisation Address">
           </div>
            <div class="form-group row">
             <label for="designation" class="col-md-2 col-form-label offset-md-2">Designation</label>
             <input type="text" class="col-md-6 form-control" name="designation" id="designation" placeholder="Enter Designation">
           </div>
            <div class="form-group row">
             <label for="cstate" class="col-md-2 col-form-label offset-md-2">Current State</label>
             <input type="text" class="col-md-6 form-control" name="cstate" id="cstate" placeholder="Enter Current State">
           </div>
            <div class="form-group row">
             <label for="cdistrict" class="col-md-2 col-form-label offset-md-2">Current District</label>
             <input type="text" class="col-md-6 form-control" name="cdistrict" id="cdistrict" placeholder="Enter Current District">
           </div>
            <div class="form-group row">
             <label for="clocality" class="col-md-2 col-form-label offset-md-2">Current Locality</label>
             <input type="text" class="col-md-6 form-control" name="clocality" id="clocality" placeholder="Enter Current Locality">
           </div>
            <div class="form-group row">
             <label for="cpincode" class="col-md-2 col-form-label offset-md-2">Current Pincode</label>
             <input type="text" class="col-md-6 form-control" name="cpincode" id="cpincode" placeholder="Enter Current Pincode">
           </div>
            <div class="form-group row">
             <label for="orgcontact" class="col-md-2 col-form-label offset-md-2">Organisation Contact</label>
             <input type="text" class="col-md-6 form-control" name="orgcontact" id="orgcontact" placeholder="Enter Organisation Contact">
           </div>
            <div class="form-group row">
             <label for="orgemail" class="col-md-2 col-form-label offset-md-2">Organisation Email</label>
             <input type="email" class="col-md-6 form-control" name="orgemail" id="orfemail" placeholder="Enter Organisation Email">
           </div>
            <div class="form-group row">
             <label for="orgfax" class="col-md-2 col-form-label offset-md-2">Organisation Fax</label>
             <input type="text" class="col-md-6 form-control" name="orgfax" id="ordfax" placeholder="Enter Organisation Fax">
           </div>
            <div class="form-group row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-primary offset-md-6" name="updateprofessional" value="Update">
             </div>
           </div>
         </fieldset>
       </form>
     </div>

   <div id="bodycontent2" style="margin-left: 10px;">
   </div>
           
             


</body>
</html>
<script >
  $(document).ready(function(){
 $("#showupdatearea").hide();
  });
  $("#updatebutton").click(function(){
      $("#showupdatearea").show();
      $('#bodycontent2').hide();
  });
    $(document).ready(function(){
     $("#personal").hide();
     $("#updateedu").hide();
     $("#updatepro").hide();
  });
   $("#updatepersonal").click(function(){
    $("#showupdatearea").hide();
    $("#personal").show(function(){
      $("#updatebutton").click(function(){
         $("#showupdatearea").hide();
    });
    });
  });
  $("#updateeducational").click(function(){
    $("#showupdatearea").hide();
    $("#updateedu").show(function(){
      $("#updatebutton").click(function(){
         $("#showupdatearea").hide();
    });
    });
  });
  $("#updateprofessional").click(function(){
    $("#showupdatearea").hide();
    $("#updatepro").show(function(){
      $("#updatebutton").click(function(){
         $("#showupdatearea").hide();
    });
    });
  });
</script>

<!-- update personal -->
<?php
$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'reg');
if(isset($_POST['updateper'])){
  $Email = $_POST['Email'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $contact=$_POST['contact'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $locality=$_POST['locality'];
  $pincode=$_POST['pincode'];
  $email=$_POST['Email'];
  $query="UPDATE `user` SET dob='$dob',gender='$gender',contact='$contact',
  state='$state',district='$district',locality='$locality',pincode='$pincode' WHERE  email='$Email'  ";
  $query_run = mysqli_query($connection,$query);
if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Personal Details Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Personal Details Not Updated")</script>';
   }
 }
?>
<!-- update Educational -->
<?php
$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'reg');
if(isset($_POST['updateeducational'])){
  $Email = $_POST['Email'];
  $course=$_POST['course'];
  $year=$_POST['year'];
  $branch=$_POST['branch'];
  $sec=$_POST['sec'];
  $email=$_POST['Email'];
  $query ="UPDATE `user` SET course='$course',year='$year',branch='$branch',sec='$sec' WHERE   email='$Email'  ";
   $query_run = mysqli_query($connection,$query);
if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Educational Details  Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Educational Details Not Updated")</script>';
   }

}
?>
<!-- update Professional -->
<?php 
$connection =mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'reg');
if(isset($_POST['updateprofessional'])){
   $Email = $_POST['Email'];
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
  $query ="UPDATE `user` SET  orgname='$orgname',orgaddress='$orgaddress',designation='$designation',cstate='$cstate',cdistrict='$cdistrict',clocality='$clocality',
  cpincode='$cpincode',orgcontact='$orgcontact',orgemail='$orgemail',orgfax='$orgfax' where email='$Email' ";
  $query_run = mysqli_query($connection,$query);
if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Professional Details Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Professional Details Not Updated")</script>';
   }
}
?>
