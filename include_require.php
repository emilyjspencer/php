
<html>
<body>

<h1>Global Reads</h1>
<p>About project</p>
<p>Book Lists</p>
<?php include 'footer.php';?>

</body>
</html>


footer.php

<?php
echo "<p>Global Reads 2019-" . date("Y") . " www.globalreads.com</p>";
?>

<html>
<body>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Mango Dancewear</h1>
<p>Mango Dancewear was founded in 2018 to provide more affordable and high-quality dancewear</p>
<p>Check out our blog</p>
<p>Find us on social media</p>

</body>
</html>


menu.php

<?php
echo '<a href="/default.asp">Home</a> -
<a href="/dancewear/default.asp">Dancewear</a> -
<a href="/footwear/default.asp">Footwear</a> -
<a href="/accessories/default.asp">Accessories</a> -
<a href="default.asp">Mango Dancewear</a>';
?>


colours.php

<?php
$colour1 = 'pink';
$colour2 = 'purple';
$colour3 = 'blue';
$colour4 = 'green';
$colour5 = 'white';
$colour6 = 'grey';
$coolour7 = 'black';
$colour8 = 'orange';
$colour9 = 'yellow';
$colour10 = 'red';


index.php

<!DOCTYPE html>
<html>
<head>
  <title>Colours</title>
</head>
<body>
<?php include 'colours.php';
echo "Tomatoes are $colour10";
echo "Apples can be $colour10 and $colour4";
echo "The sun is $colour9";

