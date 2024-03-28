<?php
$servername = "localhost";
$username = "Diya";
$password = "";
$dbname = "form";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
 echo"Error in connection";
 exit(0);
}
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile= $_POST['mobile'];
            $gender = $_POST['gender'];

$res=mysqli_query($conn, "INSERT INTO forrm VALUES ('name','email','mobile','gender')") or die(mysqli_error($conn));
$result=mysqli_query($conn, "SELECT * FROM forrm") or die(mysqli_error($conn));
if($result->num_rows>0)
{
 echo"<table border='1'>";
 echo"<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Gender</th>";
 while($row=mysqli_fetch_assoc($result))
 {
  echo"<tr><td>".$row['name']."</td>";
  echo"<td>".$row['email']."</td>";
  echo"<td>".$row['mobile']."</td>";
  echo"<td>".$row['gender']."</td>";

 }
}
else
{
 echo"Empty Table";
}
echo"</table><br>";
mysqli_close($conn);
?>
