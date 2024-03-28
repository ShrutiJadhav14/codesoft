<?php
$conn=mysqli_connect("localhost","Diya","12345","forrm");
if(isset($_POST['submit']))
{
    if(!empty($_POST['name'])&&!empty($_POST['email']) &&!empty($_POST['mobile']) 
		&&!empty($_POST['gender']))
		{
			$name = $_POST['name'];
            $email = $_POST['email'];
            $mobile= $_POST['mobile'];
            $gender = $_POST['gender'];
			
 $query="insert into forrm(name,email,mobile,gender)values
 ('$name','$email','$mobile','$gender')";
 
 $run=mysqli_query($conn,$query) or die(mysqli_error());
 if($run)
 {
	 echo"Form Submitted";
 }
 else
 {
  echo"Form not inserted.....Try Again!!!!!"
 }
}
else
{
 echo"Required";
}
}
?>