<html>
<body>
<?php print_r($_GET)?>
<?=$_GET['divide1']+$_GET['divide2']?>
<?="The result of ${_GET['divide1']} and ${_GET['divide2']} is:"?>
<h4><?=$_GET['add1']/$_GET['add2']?></h4>
<a href="index.php">Reset</a>
</body>
</html>