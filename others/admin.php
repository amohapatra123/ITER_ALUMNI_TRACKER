<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--the navbar section-->
   <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black" style="width: 150px;">

        <a href="https://www.soa.ac.in/iter" target="_blank" class="w3-hover-text-green"><img src="../assets/images/imgsidebar2.jpg" style="width:100%"></a>
        <a href="admin.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black"  >
            <i class="fa fa-user w3-xxlarge"></i>
            <p>ADD ADMIN</p>
        </a>
         <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black"  id="messagebutton" style="outline: none;">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p style="outline: none;" >SEND MESSAGE</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black" >
            <i class="fa fa-user w3-xxlarge"></i>
            <p>NEW NOTICE</p>
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
    <div id="messagearea">
        
    </div>
	<div id="datatable">
    <form action="admin.php" method="POST">
        <?php 

        if(isset($_POST['search'])){

            $valuetosearch=$_POST['valuetosearch'];
            $query="SELECT * FROM user WHERE CONCAT(name,regno,contact,email,branch,year,orgname,designation) LIKE '%".$valuetosearch."%'  ";
            $search_result=filtertable($query);
        }
        else{
            $query="SELECT * FROM user WHERE type='Alumni'";
            $search_result=filtertable($query);


        }



        function filtertable($query){
            $connect=mysqli_connect('localhost','root','','reg');
            $filter_result=mysqli_query($connect,$query);
            return $filter_result;
        }
        ?>
<br>
<br>
<input type="text"    class="form-control"    style="width: 300px;" name="valuetosearch" placeholder="Search" ><br><br>
<input type="submit"  class="btn btn-warning" name="search" value="Filter">
<input type="submit"  class="btn btn-primary" name="reset" value="Reset"><br>


	<table class="table table-striped ">
    <thead>
      <tr>
        <th>NAME</th>
        <th>REGISTRATION NUMBER</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
        <th>BRANCH</th>
        <th>PASSING YEAR</th>
        <th>ORGANISATION</th>
        <th>DESIGNATION</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_array($search_result)):?>
        <tr>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["regno"];?></td>
            <td><?php echo $row["contact"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["branch"];?></td>
            <td><?php echo $row["year"];?></td>
            <td><?php echo $row["orgname"];?></td>
            <td><?php echo $row["designation"];?></td>
            <td><input type="submit" name="detail"  class="btn btn-success" value="Detail"></td>
            <td><input type="submit" name="delete"  class="btn btn-danger" value="Delete"></td>
        </tr>
    <?php endwhile;?>
    </tbody>
    </form>
	</div>
    
	
</div>

</body>
</html>
<script>
      $("#messagebutton").click(function(){
      $("#messagearea").load("message.php");
      $('#datatable').hide();
  });
</script>