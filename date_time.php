The PHP date() method can be used to format a date

d - date e.g. 21
m - month
Y - year
l day of the week

```
<!DOCTYPE html>
<html>
<body>

<?php
echo date("Y/m/d") . "<br>";
echo  date("Y.m.d") . "<br>";
echo  date("Y-m-d") . "<br>";
echo  date("l");
?>

</body>
</html>
```

![date](date.png)

### Time

H - hour - 24h
h - hour - 12h
i - minutes
s - seconds
a - am
A - p

```
<!DOCTYPE html>
<html>
<body>

<?php
echo "The current time is " . date("h:i:sA");
?>

</body>
</html>
```

Ouputs:

The current time is 12:54:52PM

### Create a date with mktime()

```
<!DOCTYPE html>
<html>
<body>

<?php
$d=mktime(13, 59, 54, 22, 9, 2020);
echo  date("Y-m-d h:i:sa", $d);
?>

</body>
</html>
```

2021-10-09 01:59:54pm

### strtotime(time, now) - to format date and time nicely

```
<!DOCTYPE html>
<html>
<body>

<?php
$timeNow=strtotime("2:04pm September 22 2020");
echo "Created date is " . date("Y-m-d h:i:sA", $timeNow);
?>

</body>
</html>

```

Outputs:

Created date is 2020-09-22 02:04:00PM


### Timezone

Use the PHP method date_default_timezone_set(Country/City) - to find the timezone

e.g.

```
<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("England/London");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>
```
Outputs
The time is 12:55:45pm
