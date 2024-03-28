<?php 
 
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr="";  
$name = $email = $mobileno="";  

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["fullname"])) {  
         $nameErr = " Full Name is required";  
    } else {  
        $name =input_data($_POST["fullname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }
	}			
			
			
      
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email =input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            } 
              
					
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno =input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
			}
			function input_data($data)
			{
				$data=trim($data);
				$data=striplashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			
if(isset($_POST['submit']))
{
			
				if($nameErr==""&& $emailErr=="" && $mobilenoErr=="")
				{
					echo "<h3 color=#FF0001><b> you have successfully registered.</b></h3>";
				}
				else{
					echo "<h3 color=#FF0001><b> you didnt fill the form correctly.</b></h3>";
				}
}
}
			
			
			
	

?>
	