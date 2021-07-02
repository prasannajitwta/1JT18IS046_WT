<?php
$user = "Prasanna";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<style>  
Body  
{  
color:white;  
}
</style> 
<h2 style="text-align: center";> <?php echo $user; ?>,Welcome to Sample PHP Script </h2>
<?php
$Color = "white";
echo "<body style='background-color:blue'>";
print "<h3> This Program Displays Number of Page Visits</h3>";
print "<h4> REFRESH PAGE </h4>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>