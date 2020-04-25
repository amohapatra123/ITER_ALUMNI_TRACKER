<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
     .header{
      width:700px;
      background-color:purple;
      margin-left:-20px;
      padding:10px;
      text-align: center;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }
    .noticearea{
      width: 700px;
      height: 700px;
      margin-left:-20px;
      background-color: whitesmoke;
      
    }
    #noticejaga{
      margin-left:-600px;
      display: inline-block;

    }

</style>
</head>
<body>

<body class="w3-black">

    <!-- ICON Bar (Sidebar - hidden on small screens) -->
   <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black" style="width: 100px;">

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
    <div class="w3-white">
  <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home" style="margin-left: 100px;">

            <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
                <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
            </h3>
            <p class="w3-text-green w3-arial"><b><h3 style="color:green">ITER Alumni Tracker<br>Institute of Technical Education and Research</h3> </b></p>

   
            </header>
            </div>
            </div>
             <!-- ABOUT SECTION -->
             <!-- SOA PHOTO SECTION -->
             
            <div class="w3-yellow"> 
            <div class="w3-padding-64 w3-content w3-text-grey" id="photos">
                <div class="container">
  
    
   <div id="bodycontent" style="margin:5% 20% 5% 20%;">
     <form action="profile.php" method="POST" style=" width:600px;
      padding:20px;
      margin:10px 20px 10px 20px;
      background-color: whitesmoke;
      border-radius: 10px;">
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
   </div>
    
   <div id="bodycontent2" style="margin-left: 10px;">
    <div>
    <br><br><br>
    <div class="container" id="noticejaga" >
      <table style="margin-left:750px;">
        <tr>
          <th style="padding-right: 100px;">
      <center>
      <div class="header">
        <h2 style="color:whitesmoke; text-align: center;"><strong>EVENTS</strong></h2>
        
      </div>
      <marquee class="noticearea" direction="up" scrolldelay="200" style="text-align: center;height: 200px;background-color: whitesmoke;" onmouseover="this.stop()" onmouseout="this.start()" >
        
<?php   
$connect=mysqli_connect('localhost','root','','reg');
$querynotice="SELECT * FROM  notice ";
$querynoticerun=mysqli_query($connect,$querynotice);

?>
<?php   while($row=mysqli_fetch_array($querynoticerun)): ?>
          
<h3><?php echo $row["message"]; ?></h3>
 <hr style="eight: 1px;">
<?php endwhile; ?>
</marquee>
</center>
</th>

</tr>
</table>
    </div>
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

    
  </div>
</div>
</div>
               
            </div>
            </div>
                
            </div>
            </div>

           
             
            <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
                <h2 class="w3-text-light-grey">Contact us:</h2>
                <hr style="width:200px" class="w3-opacity">

                <div class="w3-section">
                    <p><a href="https://www.google.com/maps/place/ITER,+Siksha+'O'+Anusandhan/@20.2499448,85.7999918,87m/data=!3m1!1e3!4m19!1m13!4m12!1m4!2m2!1d85.8583796!2d20.2893659!4e1!1m6!1m2!1s0x3a19a7a3b9692fff:0x87cd0a356bbc39ce!2sSiksha+o+anusandhan+ITER+google+maps!2m2!1d85.8002307!2d20.2498709!3m4!1s0x3a19a7a3b9692fff:0x87cd0a356bbc39ce!8m2!3d20.2498709!4d85.8002307"
                            target="_blank" class="w3-hover-text-green"><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Jagamara, Khandagiri, Bhubaneswar, Odisha-751030, India</p></a>
                        <p><a href="https://www.justdial.com/Bhubaneshwar/Institute-Of-Technical-Education-Research-Near-Khandagiri-Square-Khandagiri/0674P674STD20360_BZDET" target="_blank" class="w3-hover-text-green"><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Contact us: +91-674- 2350635, 2350791, 2350794, 2350802 Fax: +91 - 674 - 2350642</a>
                        </p>
                        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: info@soauniversity.ac.in</p>
                </div><br>

            </div>
        </center>
            <!--START FOOTER contains social media links, copyrights and GeekCode -->
            <footer class="w3-content w3-padding-100 w3-text-grey w3-large w3-center ">
                <a href="https://www.facebook.com/SikshaOAnusandhanSOA/ " target="_blank " class="w3-hover-text-green "><i class="w3-center fa fa-facebook-official w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://www.instagram.com/soa_sikshaoanusandhan/?hl=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-instagram w3-hover-opacity w3-xlarge w3-&ensp "></i></a>
                <!-- <i class="fa fa-snapchat w3-hover-opacity "></i>
                <i class="fa fa-pinterest-p w3-hover-opacity "></i>-->
                <a href="https://twitter.com/soasocialmedia?lang=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-twitter w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://in.linkedin.com/school/siksha- 'o'-anusandhan-university/ " target="_blank " class="w3-hover-text-green "><i class="fa fa-linkedin w3-hover-opacity w3-xlarge "></i></a>
                <p class="w3-center ">Copyrights &copy;2020 PseudoDevOps
                </p>
                <p class="w3-medium w3-center ">Geekcode visit us at
                    <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020- " target="_blank " class="w3-hover-text-green ">PseudoDevOps</a>
                </p>

                <!-- END FOOTER -->
            </footer>


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