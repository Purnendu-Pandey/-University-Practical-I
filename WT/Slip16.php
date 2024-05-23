<!--
Q.1) Write a PHP script for the following: Design a form to accept the marks of 5 different 
subjects of a student, having serial number, subject name & marks out of 100. Display the 
result in the tabular format which will have total, percentage and grade. Use only 3 text 
boxes.(Use array of form parameters
-->
<!--HTML FILE -->
<html>
<body>
    <form action="S16.php" method="GET">
    <h1>Enter Student Details</h1><br>
    <h3> Enter the first subject details</h3>
    Enter serial number: <input type="number" name="n[]"><br>
    Enter subject name: <input type="text" name="s[]"><br>
    Enter marks out of 100: <input type="number" name="m[]"><br>
    
    <h3> Enter the second subject details</h3>
    Enter serial number: <input type="number" name="n[]"><br>
    Enter subject name: <input type="text" name="s[]"><br>
    Enter marks out of 100: <input type="number" name="m[]"><br>
    
    <h3> Enter the third subject details</h3>
    Enter serial number: <input type="number" name="n[]"><br>
    Enter subject name: <input type="text" name="s[]"><br>
    Enter marks out of 100: <input type="number" name="m[]"><br>
    
    <h3> Enter the fourth subject details</h3>
    Enter serial number: <input type="number" name="n[]"><br>
    Enter subject name: <input type="text" name="s[]"><br>
    Enter marks out of 100: <input type="number" name="m[]"><br>
    
    <h3> Enter the fifth subject details</h3>
    Enter serial number: <input type="number" name="n[]"><br>
    Enter subject name: <input type="text" name="s[]"><br>
    Enter marks out of 100: <input type="number" name="m[]"><br>
        
    <input type="submit" value="submit"> 
</form>
</body>
</html>

<!--PHP FILE -->
<?php
     $n=$_GET['n'];
     $s=$_GET['s'];
     $m=$_GET['m'];
     $total=0;
     for ($i=0;$i<5;$i++)
     {
         $total=$total+$m[$i];
     }
     $per=$total/5;
     echo "$per";
     
     echo "TABLE";
     echo "<table border=1>";
     //echo "<table>";
     echo "<th>";
     echo "serial number";
     echo "</th>";
     echo "<th>";
     echo "subject";
     echo "</th>";
     echo "<th>";
     echo "marks";
     echo "</th>";
     
     for ($i=0;$i<count($n);$i++)
     {
     
         echo "<tr>";
         echo "<td>";
         echo "$n[$i]";
         echo "</td>";
         echo "<td>";
         echo "$s[$i]";
         echo "</td>";
         echo "<td>";
         echo "$m[$i]";
         echo "</td>";
         echo "</tr>";
     }
     echo "<tr ><td colspan=3 align=right>Total:$total</td></tr>";
     echo "<tr><td colspan=3 align=right>Percentage:$per</td></tr>";
     if ($per>=90)
     {
        echo "<tr><td colspan=3 align=right>Grade: A</td></tr>";
     }
     else if ($per>=80 && $per<90)
     {
        echo "<tr><td colspan=3 align=right>Grade: B</td></tr>";
     }
     else if ($per>=60 && $per<80)
     {
        echo "<tr><td colspan=3 align=right>Grade: C</td></tr>";
     }
     else if ($per>=35 && $per<60)
     {
        echo "<tr><td colspan=3 align=right>Grade: D</td></tr>";
     }
     else
     {
        echo "<tr><td colspan=3 align=align>Grade: fail</td></tr>";
     }
     echo "</table>";
?>