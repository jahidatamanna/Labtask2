<!DOCTYPE html>
<html>
<body>

 <h3>EXPERIMENT NAME</h3>
 
 <?php
echo "Designing HTML form using PHP with validation of user inputs";
?> 
<h3>OBJECTIVE</h3>

 <?php
echo "This assessment item is designed to give you some practice on validating user inputs using PHP.";
?> 
 <h3>ASSESSMENT TASK</h3>
 
 <?php
echo "1. Design the following HTML form and perform the following validations
";
?> 
<br>

<br>

<meta charset="utf-8">

<body>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">

</form>

 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field

}
?>


<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
 $emailErr = $genderErr =  "";
 $email = $gender =$DEGREE = "";//add degree

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
$name="";
}
}
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
$email ="";
}
}


 if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}

//add

 if (empty($_POST["DEGREE"])) {
$DEGREEErr = "DEGREE is required";
} else {
$DEGREE = test_input($_POST["DEGREE"]);

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error"> <?php echo $emailErr;?></span>
<br>
<br>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="DAte" name="DATE">

<br><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error"> <?php echo $genderErr;?></span>
<br><br>

<br><br>
DEGREE:
<input type="radio" name="DEGREE" <?php if (isset($DEGREE) && $DEGREE=="SSC") echo "checked";?> value="SSC">SSC
<input type="radio" name="DEGREE" <?php if (isset($DEGREE) && $DEGREE=="male") echo "checked";?> value="HSC">HSC
<input type="radio" name="DEGREE" <?php if (isset($DEGREE) && $DEGREE=="other") echo "checked";?> value="BSc">BSc
<input type="radio" name="DEGREE" <?php if (isset($DEGREE) && $DEGREE=="SSC") echo "checked";?> value="MSc">MSc

<span class="error"> <?php echo $genderErr;?></span>
<br><br>


<form action="/action_page.php">
  <label for="cars">Blood Group:</label>
  <select id="cars" name="cars">
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
	<option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="O-">O-</option>
    <option value="AB">AB-</option>
  </select>
<br>
<br>

<input type="submit" name="submit" value="Submit">
</form>













<?php


echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $DEGREE;

?>














</body>
</html>




