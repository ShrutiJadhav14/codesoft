<!DOCTYPE html>
<html>
<head>
    <title>booking details</title>
	<link rel="stylesheet" href="style2.css">
	<style>
	.error {   
color: white;  
    font-family: lato;  
    background: red;  
       
}  
	</style>
</head>

<body>
<?php 
// define variables to empty values  
$firstnameErr ="";
 $lastnameErr= $adharcardErr= $addressErr= $emailErr = $mobilenoErr="";  
$firstname = $lastname= $adharcard= $address= $email = $mobileno="";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["firstname"])) {  
         $firstnameErr = "First Name is required";  
    } else {  
   $firstname = test_input($_POST["firstname"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {  
      $firstnameErr = "Only letters and white space allowed";  
    }  
  }  
//String Validation  
    if (empty($_POST["lastname"])) {  
         $lastnameErr = " Last Name is required";  
    } else {  
        $lastname = test_input($_POST["lastname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {  
                $lastnameErr = "Only alphabets and white space are allowed";  
            } 			
    }  
	//Address validation
if (empty($_POST["address"])) {  
         $addressErr = " Address is required";  
    } else {  
        $address = test_input($_POST["address"]);  
          }  
 //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = test_input($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = test_input($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            } 
	}
    
   
 //Adhar Validation  
    if (empty($_POST["adharcard"])) {  
            $adharcardErr = "AdharCard is required";  
    } else {  
            $adharcard = test_input($_POST["adharcard"]);  
            // check if aadhar no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $adharcard) ) {  
            $adharcardErr = "Only numeric value is allowed.";  
            }  
        //check aadhar no length should not be less and greator than 10  
        if (strlen ($adharcard) != 12) {  
            $adharcardErr = "Aadhar card no must contain 12 digits.";  
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
	

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>","bookinginput.php">
   <div class="header">
   <div class="box">
   <h1>Welcome To Paradise hotel!!</h1>
   <p>Please fill all necessary details for booking</p>
  
   <div class="main">
   <div class="col-md-6">
   <p>Guest Details</p>
   <hr>
   Enter Your Name:<input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>">
     <span class="error"> * <?php echo $firstnameErr;?> </span>  
 				  <input type="text" name="lastname" placeholder="Last  Name" value="<?php echo $lastname;?>">
				       <span class="error"> * <?php echo $lastnameErr?> </span>
				  <br>
				   <br>
				   <br>
 Permanent Address:<textarea name="address" placeholder="Address" value="<?php echo $address;?>"></textarea> 
      <span class="error"> * <?php echo $addressErr;?> </span>
 </div>
 </br>
 </br>
 <div class="col-md-6">
Phone No <input type="text" name="mobileno" maxlength="10" value="<?php echo $mobileno;?>" >
 <span class="error"> * <?php echo $mobilenoErr;?> </span>
Email Id<input type="text" name="email" value="<?php echo $email;?>" >
 <span class="error"> * <?php echo $emailErr;?> </span>
</div>
<br>
</br>
Aadhar card no<input type="text" name="adharcard" maxlength="12"value="<?php echo $adharcard;?>" >
 <span class="error"> * <?php echo $adharcardErr;?> </span>
<br>
</br>
Arrival date:<input type="date">
Departure date:<input type="date">
<br>
<input type="submit" name="b1" class="primary-btn" value="Submit" onclick="displayDetails()">
  </div>
  </div>
   
   </div>
  </form>

   
</body>
</html>