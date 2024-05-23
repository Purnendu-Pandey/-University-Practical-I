<!--
Q.1) Write a PHP script to sort the following associative array : 
array(“Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40") in
a) ascending order sort by Value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
-->

<!--HTML FILE-->
<html>
<head>
<title>Hii</title>
</head>
<body>
    <form action="Slip17.php" method="post">
    	   <h1>Choose Any One Option</h1>
           <input type="radio" name="op" value="1">Ascending Order sort by value<br>
           <input type="radio" name="op" value="2">Ascending Order sort by key<br>
           <input type="radio" name="op" value="3">descending Order sorting by value<br>
           <input type="radio" name="op" value="4">Descending Order sorting by key<br>
           <input type="submit" value="submit">
    </form>
</body>
</html>

<!--PHP FILE-->
<?php
    $ch=$_POST["op"];
    $a=array("Sophia"=>31,"Jacod"=>41,"William"=>39,"Ramesh"=>40);
    print_r($a);
    switch($ch)
    {
      case 1:
        asort($a);
        echo "<br>Ascending Order sort by<b>value</b>:";
        print_r($a);
        break;
      case 2:
        ksort($a);
        echo "<br>Ascending Order sort by<b>key</b>:";
        print_r($a);
        break;
      case 3:
        arsort($a);
        echo "<br>Descending Order sorting by<b>value</b>:";
        print_r($a);
        break;
      case 4:
        krsort($a);
        echo "<br>Descending Orderting sort by<b>key</b>:";
        print_r($a);
        break;
    }
?> 
