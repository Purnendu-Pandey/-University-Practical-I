<!--
Q.1) Write a menu driven program to perform the following stack related operations:
a) Insert an element in stack 
b) Delete an element from stack 
c) Display the contents of stack
-->

<!-- HTML FILE -->
<!DOCTYPE html>
<html>
<head>
<title>Hii</title>
</head>
<body>
    <form action="Slip23.php" method="post">
    	   <h1>Choose Any One Option</h1>
           <input type="radio" name="op" value="1">Insert An Element In Stack<br>
           <input type="radio" name="op" value="2">Delete An Element From Stack<br>
           <input type="radio" name="op" value="3">Display The Content From Stack<br>
           <input type="submit" value="submit">
    </form>
</body>
</html>

<!-- PHP FILE -->
<?php
     $ch=$_POST['op'];
     $a=array(1,2,3);
     switch($ch)
     {
        case 1:
          print_r($a);
	        array_push($a,10);
	        echo "<br> After Insertion :";
	        print_r($a);
	        break;
	      case 2:
	        print_r($a);
	        array_pop($a,10);
	        echo "<br> After Deletion :";
	        print_r($a);
	        break;
	      case 3:
	        echo "<br> Content of Stack:";
	        print_r($a);
	        break;	
     }
?>