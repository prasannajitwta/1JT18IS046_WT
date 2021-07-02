<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {

font-size: 50px;
position: absolute;
top: 25%;
left: 30%;


}
body {
background-color: blue;
}
</style>
<p> <?php

print " Server time is  ";echo date(" h: i : s A");
echo "<br>";
print "Today is ";echo date('Y/m/d H:i:s');
echo "<br>";
print "Today is ";echo date('Y.m.d H:i:s');
echo "<br>";
print "Today is ";echo date('Y-m-d H:i:s');
echo"<br>";
print "Today is ";echo date("l") . "<br>";
?> 
</p>
</head>
</html>