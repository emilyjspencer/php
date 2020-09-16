<!DOCTYPE html>
<html>
<body>
<form method="get">
First Name:
<input type="text" name="firstname">
<br>
Last Name:
<input type="text" name="lastname">
<br>
Age: 
<input type="text" name="age">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Your first name is: <?=$_GET['firstname'];?></p>
<p>Your last name is: <?=$_GET['lastname'];?></p>
<p>You are: <?=$_GET['age'];?></p?>

</body>
</html>