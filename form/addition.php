<html>
<body>
<?php print_r($_GET)?>
<?=$_GET['add1']+$_GET['add2']?>
<?="The sum of ${_GET['add1']} and ${_GET['add2']} is:"?>
<h4><?=$_GET['add1']+$_GET['add2']?></h4>
<a href="index.php">Reset</a>
</body>
</html>