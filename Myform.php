<html>
<head>
</head>
<body>

<?php
//define variables and set to empty values
$name=$email=$gender=$comment=$websie="";
$nameError$emailError=$websiteError=$commentError="";
$nameError="";
$gender="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $website=test_input($_POST["websitw"]);
    $cooment=test_input($_POST["comment"]);
    $gender=test_input($_POST["gender"]);
    if(empty($name)|| $name=="")
    {
        $nameError="Please Enter Your Name";
    }
    if(empty($name)|| $name=="")
    {
        $nameError="Please Enter Your Name";
    }
    if(empty($email)|| $name=="")
    {
        $nameError="Please Enter Your email";
    }
    if(empty($website)|| $name=="")
    {
        $nameError="Please Enter Your website";
    }
    if(empty($comment)|| $name=="")
    {
        $nameError="Please Enter Your comment";
    }
    if(empty($gender)|| $name=="")
    {
        $nameError="Please Enter Your gender";
    }
}
function test_input($data){
    $data=trim($data);
    $data=striplashes($data);
    $data=htmlspecialchars($data);
    return $data;
} 
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<php echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>">
Name: <input type="text" name="name">
<?
php echo $nameError
echo $nameError;
 ?>
 
<br><br>
>
E-mail: <input type="text" name="email">
<?
php echo $emailError
echo $emailError;
 ?>
<br><br>
Website: <input type="text" name="website">
<?
php echo $websiteError
echo $websiteError;
 ?>
<br><br>
Comment: <input type="text" name="comment">
<?
php echo $commentError
echo $commentError;
 ?>
<br><br>
Gender: <input type="text" name="gender">
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Female
<input type="radio" name="gender" value="other">Female
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>"
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>

</body>
</html>