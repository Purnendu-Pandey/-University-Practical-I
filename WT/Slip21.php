<!--
Q.1) Create an array of 15 high temperatures, approximating the weather for a spring month, 
then find the average high temp, the five warmest high temps Display the result on the browser
-->

<!-- HTML FILE -->
<html>
<body>
	<form action="Slip21.php" methods="GET">
	    Enter Array of high temperature : <input type="text" name="n1">
	    <br>
	    <br>
	    <input type="submit" value="submit">
	</form>
</body>
<html>

<!-- PHP FILE -->
<?php
$a=$_GET["n1"];
$ht=$b=explode(",",$a);

echo "Array of high temp is : ";
foreach($b as $c)
	echo $c."\t";
echo "<br>";
$sum=0;
$cn=count($b);
foreach($b as $c)
	$sum=+$c;
	
$avg=$sum/$cn;
rsort($b);
$k=array_slice($b,0,5);
sort($ht);
$m=array_slice($ht,0,5);

echo "Avg high temperature is : $avg &deg C";
echo  "<br>";
echo "Five warmiest high temp are :";
foreach($k as $k1)
	echo $k1."\t\t";
	
echo "<br>";
echo " Five coolest temp are :";
foreach($m as $m1)
	echo $m1."\t\t";
?>