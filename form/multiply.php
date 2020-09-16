<html>
<body>
<?php print_r($_GET)?>
<?=$_GET['multiply1']+$_GET['multiply2']?>
<?="The sum of ${_GET['multiply1']} and ${_GET['multiply2']} is:"?>
<h4><?=$_GET['multiply1']*$_GET['multiply2']?></h4>
<a href="index.php">Reset</a>
</body>
</html>