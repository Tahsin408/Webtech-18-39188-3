
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dobErr= $bloodGrpErr= $degreeErr ="";
$name = $email = $gender = $dob= $bloodGrp = $degree ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name= "";
      if(str_word_count($name)>=2){
        $nameErr = "name is okay";
        }
        else {
          echo "name must contain two words";
        }
      }
    
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } 
  else {
    $dob = test_input($_POST["dob"]);
  }

  if (($_POST["bloodGrp"])=="Unknown") {
    $bloodGrpErr = "Blood Group is required";
  } else {
    $bloodGrp = test_input($_POST["bloodGrp"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Date of Birth:
<input type="text" name="Date" placeholder="Date" value="<?php echo $dob;?>">
<input type="text" name="Month" placeholder="Month" value="<?php echo $dob;?>">
<input type="text" name="Year"placeholder="Year" value="<?php echo $dob;?>">
  
  <span class="error">* <?php echo $dobErr;?></span>
</select>
 <br><br>
 <label for="bloodGrp">Blood Group:</label>
 <select name="bloodGrp" id= "bloodGrp"> 
    <option value="A Positive" >A Positive </option> 
    <option value="A Negative">A Negative</option>
    <option value="B Positive">B Positive</option>
    <option value="B Negative">B Negative</option>
    <option value="AB Positive">AB Positive</option>
    <option value="AB Negative">AB Negative</option>
    <option value="O Positive">O Positive</option>
    <option value="O Negative">O Negative</option>
    <option value="Unknown">Unknown</option>
</select>
<span class="error">* <?php echo $bloodGrpErr;?></span>
 <br><br>
 Degree:
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC 
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc  
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc  

  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
?>

</body>
</html>