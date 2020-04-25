<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>
	<div class="container">
		<form action="message.php" method="POST">
			<div class="form-group">
				<br>
				<br>
				<br>
				<label>Registration Number</label>
                <input type="text" style="width: 300px;" class="form-control" name="registrationnumber" placeholder="Enter the registration number">
				<br>
				<br>
				<br>
				<textarea class="form-text" name="textarea"></textarea>
				<br>
				<br>
				<input type="submit" name="message_button" class="btn btn-dark btn-primary" value="Send">
			</div>
		</form>
	</div>

</body>
</html>
<?php 

//$textarea="";
$connect=mysqli_connect('localhost','root','','reg');
if(isset($_POST['message_button'])){
	$registrationnumber=$_POST['registrationnumber'];
	$textarea=$_POST['textarea'];
	$query="UPDATE `user` SET message='$textarea'  WHERE regno='$registrationnumber'";
	$queryselect=mysqli_query($connect,$query);
	if($queryselect)
   {
    echo '<script type = "text/javascript"> alert("Data Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Data Not Updated")</script>';
   }

}


?>