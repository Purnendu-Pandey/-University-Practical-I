<!--
Q.1) Write a menu driven program to perform the following operations on associative arrays: 
a) Split an array into chunks 
b) Sort the array by values without changing the keys. 
c) Filter the even elements from an array.
-->
<!-- HTML FILE -->
<html>
    <body>
        <form action="Slip20.php" method="post">
            select the option:-<br>
            a. Split an array into chunks 
            <input type="radio" name="op" value="1"><br>
            b. Sort the array by values without changing the keys.
            <input type="radio" name="op" value="2"><br>
            c. Filter the even elements from an array.
            <input type="radio" name="op" value="3"><br>
            <input type="submit">
        </form>
    </body>
</html>

<!-- PHP FILE -->
<?php
$op=$_POST['op'];
function is_odd($var)
{
    if ($var % 2 == 1)
        return $var;
}
$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
$arr1 = array('l'=>11,'m'=>2,'n'=>33,'o'=>44,'p'=>5,'q'=>66,'r'=>77,'s'=>8);

switch($op)
{
    case 1:
      $a=array_chunk($arr,4);
      print_r($a);
      break;
    case 2:
      asort($arr);
      print_r($arr);
      break;
    case 3:
      print_r(array_filter($arr,"is_odd"));
      break;
}
?>