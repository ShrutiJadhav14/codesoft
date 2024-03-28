<?php
$conn=mysqli_connect("localhost","Diya","12345","booking");
if($conn)
{
 echo"Connection Sucessfully";
 $firstname = $_REQUEST['firstname'];
 $lastname = $_REQUEST['lastname'];
 $email = $_REQUEST['email'];
 $adharno = $_REQUEST['adharno'];
 $mobileno = $_REQUEST['mobileno'];
 $address = $_REQUEST['address'];
 $query"INSERT INTO bookingdata VALUES('$firstname','$lastname','$email','$adharno',
 '$mobileno','$address')";
 if(mysqli_query($conn,$query))
 {
  echo"Record inserted Succesfully";
 }
 else
 {
  echo"Record not inserted.....Try Again!!!!!"
 }
}
else
{
 echo"Connection error".mysqli_connect_error;
}
mysqli_close($conn);
?>