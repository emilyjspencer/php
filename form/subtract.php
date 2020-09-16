<html>
<body>
<?php print_r($_GET)?>
<?=$_GET['subtract1']+$_GET['subtract2']?>
<?="The result of ${_GET['subtract1']} and ${_GET['subtract2']} is:"?>
<h4><?=$_GET['subtract1']-$_GET['subtract2']?></h4>
<a href="index.php">Reset</a>
</body>
</html>