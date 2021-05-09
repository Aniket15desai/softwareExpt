<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php 
    $nameErr = $emailErr = $mobilenoErr = $passErr = $rollErr = $genderErr = $ageErr = $courseErr = $yearErr = "";
    $name = $email = $Roll_No = $mobileno = $password = $age = $gender = $course = $year = "";

    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Name Error
        if (empty($_POST["name"])) {  
            $nameErr = "Name is required";  
        } else {  
           $name = input_data($_POST["name"]);  
               // check if name only contains letters and whitespace  
               if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                   $nameErr = "Only alphabets and white space are allowed";  
               }  
       }  
         
       //Email Validation   
       if (empty($_POST["email"])) {  
               $emailErr = "Email is required";  
       } else {  
               $email = input_data($_POST["email"]);  
               // check that the e-mail address is well-formed  
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                   $emailErr = "Invalid email format";  
               }  
        }  
       
       //Number Validation  
       if (empty($_POST["mobileno"])) {  
               $mobilenoErr = "Mobile no is required";  
       } else {  
               $mobileno = input_data($_POST["mobileno"]);  
               // check if mobile no is well-formed  
               if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
               $mobilenoErr = "Only numeric value is allowed.";  
               }  
           //check mobile no length should not be less and greator than 10  
           if (strlen ($mobileno) != 10) {  
               $mobilenoErr = "Mobile no must contain 10 digits.";  
               }  
        }
        
        //Password
        if(!empty($_POST["password"]) && input_data($_POST["password"])){
            $password = input_data($_POST["password"]);
            if (strlen($_POST["password"]) <= 8) {
                $passErr = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $passErr = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            else if(!preg_match("#[a-z]+#",$password)){
                $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
        }
     
       //Age Field Validation  
       if (empty ($_POST["age"])) {  
               $ageErr = "Age is required";  
       } else {  
               $age = input_data($_POST["age"]);  
       }
	
	//Gender Field Validation  
       if (empty ($_POST["gender"])) {  
               $genderErr = "Gender is required";  
       } else {  
               $gender = input_data($_POST["gender"]);  
       }
	//Gender Field Validation  
       if (empty ($_POST["course"])) {  
               $courseErr = "Course is required";  
       } else {  
               $Course = input_data($_POST["course"]);  
       }
	//Gender Field Validation  
       if (empty ($_POST["year"])) {  
               $yearErr = "Year is required";  
       } else {  
               $year = input_data($_POST["year"]);  
       }
    }

    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }
?>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        <h1>Term Fees</h1>
        <div class="input-group">
          <label>Roll No</label>
          <input type="text" placeholder="Roll No" name="Roll_No">
        </div>
        <div class="input-group">
          <label>Name of the Student</label>
          <input type="text" name="name" placeholder="Name of Student">
          <span>*<?php echo $nameErr; ?></span>
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="Email">
          <span>*<?php echo $emailErr; ?></span>
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <input type="number" name="mobileno" placeholder="Phone No.">
            <span>*<?php echo $mobilenoErr; ?></span>
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password">
          <span>*<?php echo $passErr; ?></span>
        </div>
        <div class="input-group">
            <label>Age</label>
            <input type="text" name="age" placeholder="Age">
	    <span>*<?php echo $ageErr; ?></span>
        </div>

        <div class="radio-input">
            <label>Gender</label><br><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
        </div>
        <span>*<?php echo $genderErr; ?></span>
        <div class="input-group">
          <label>Course</label>
          <select name="course[]">
            <option selected="true" disabled="disabled">Select Course</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Automobile Engineering">Automobile Engineering</option>
          </select>
	  <span>*<?php echo $courseErr; ?></span>
        </div>
        <div class="input-group">
          <label>Year/Semester</label>
          <select name="year[]">
              <option selected="true" disabled="disabled">Select Year and Semester</option>
              <option value="1st Year/1st Semester">1st Year/1st Semester</option>
              <option value="1st Year/2nd Semester">1st Year/2nd Semester</option>
              <option value="2nd Year/3rd Semester">2nd Year/3rd Semester</option>
              <option value="2nd Year/4th Semester">2nd Year/4th Semester</option>
              <option value="3rd Year/5th Semester">3rd Year/5th Semester</option>
              <option value="3rd Year/6th Semester">3rd Year/6th Semester</option>
          </select>
	  <span>*<?php echo $yearErr; ?></span>
        </div>
        <div class="input-group">
          <button type="submit" name="submit" class="btn">Submit</button>
        </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == ""){
                header("Location: output.php?name=$name & email=$email & mobileno=$mobileno & age=$age & gender=$gender & course=$course & year=$year");
            }
            else{
                echo "Fill the required Field";
            }
        }
    ?>
</body>

</html>