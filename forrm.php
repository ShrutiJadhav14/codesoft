<! Doctype html>  
 
<head>  
    <title> PHP Registration Form Example </title>  
	<link rel="stylesheet" href="style3.css">
  <style>  
.error {   
color: white;  
    font-family: lato;  
    background: red;  
    display: inline-block;  
    padding: 2px 10px;  
}  
* {  
    padding: 1;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 30px auto;  
   
    width: 800px;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: black;  
    text-transform: uppercase;  
}  
label {  
    width: 120px;  
    display: inline-block;  
    text-align: left;  
    font-size: 1.5rem;  
    font-family: 'Lato';  
}  
input {  
    border: 2px solid #ccc;  
    font-size: 1.5rem;  
    font-weight: 50;  
    font-family: 'Lato';  
    padding: 8px;
	
}  
form {  
    margin: 25px auto;  
    padding: 27px;  
    border: 5px solid #ccc;  
    width: 900px;  
    width: 600px;  
    background: #f3e7e9;  
}  
div.form-element {  
    margin: 2px 0;  
}  
input[type=submit]::after {    
  background: #fff;    
  content: '';    
  position: absolute;    
    
}    
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 2em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
      
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  
</head>  
<body>    
<?php  
$nameErr = "";  
$emailErr = "";  
$genderErr = "";
$mobileErr="";  
 $name = "";  
$email = "";  
$gender = ""; 
$mobile="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["name"])) {  
    $nameErr = "Name Field is required";  
  } else {  
    $name = test_input($_POST["name"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
      $nameErr = "Only letters and white space allowed";  
    }
else{
	$nameErr="Valid";
}	
  }  
    if (empty($_POST["email"])) {  
    $emailErr = "Email field is required";  
  } else {  
    $email = test_input($_POST["email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailErr = "Invalid email format";  
    }  
	else{
	$emailErr="Valid";
}
	
  }   
    if (empty($_POST["mobile"])) {  
            $mobileErr = "Mobile no is required";  
    } else {  
            $mobile =test_input($_POST["mobile"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobile) ) {  
            $mobileErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greatar than 10  
        if (strlen ($mobile) != 10) {  
            $mobileErr = "Mobile no must contain 10 digits.";  
            } 
else{
	$mobileErr="Valid";
}			
			}  
  if (empty($_POST["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gender = test_input($_POST["gender"]);  
  }
if($_SERVER["REQUEST_METHOD"]== "POST"){
	if(isset($_POST['submit'])and $nameErr=="Valid" 
                             and $emailErr=="Valid" 	
							    and $mobileErr=="Valid") {
header("location:index1.html");
exit();
								}
}  
}  
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data; 
  
}  
								
								
?>  

<h1>Welcome to Paradise!! </h1> 
<h3>Register here!!</h3> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
  <b> Enter Name: </b> <input type="text" name="name" value="<?php echo $name;?>">  
  <span class="error"> *  <?php echo $nameErr;?> </span>  
  <br> <br>  
 <b> Enter E-mail: </b> <input type="text" name="email" value="<?php echo $email;?>">  
  <span class="error"> * <?php echo $emailErr;?> </span>  
  <br> <br>  
 <b> Enter Number: </b> <input type="text" name="mobile" value="<?php echo $mobile;?>">  
<span class="error"> * <?php echo $mobileErr;?> </span>  
  <br> <br> <center>
 <b> Select Gender: </b> 
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other    
  </center>
  <span class="error"> * <?php echo $genderErr;?> </span>  
  <br> <br>  
  <input type="submit" name="submit" value="Register ">    
</form>  

</body>  
</html>  