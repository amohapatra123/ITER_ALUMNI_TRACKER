<html>
<head>
<title>Update</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 <style>
    form{
      width:600px;
      padding:20px;
      margin:10px 20px 10px 20px;
      background-color: whitesmoke;
      border-radius: 10px;
      

    }
  </style>
</head>
<body>
      
    
   
    <form action="update.php" method="POST">
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
    <input type="submit" class="btn btn-primary" name="update" value="UPDATE"/>
   </form>
  

</body>
</html>

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

  $query = "UPDATE `user` SET dob='$dob',gender='$gender',contact='$contact',state='$state',district='$district',locality='$locality' where email='$Email' ";
  
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