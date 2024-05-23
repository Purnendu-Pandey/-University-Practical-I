<!--
Q.1) Write a menu driven program to perform various file operations. Accept filename from user. [15]
a) Display type of file. 
b) Display last modification time of file 
c) Display the size of file 
d) Delete the file
-->

<!--HTML FILE -->
<html>
<body>
    <form action="Slip25.php" method="GET">
        Enter File name : <input type="text" name="f1" />
        <br /><br />
       
        <input type="radio" name="op" value="1" />
        1.Disp1ay type of file.....
        <br />
        <input type="radio" name="op" value="2" />
        2.Display last access time of file.....
        <br />
        <input type="radio" name="op" value="3" />
        3.Display size of file.....
        <br />
        <input type="radio" name="op" value="4" />
        4.Delete the file.....
        <br><br>
        <input type="submit" />
    </form>
</body>
</html>

<!--PHP FILE -->
<?php
$file=$_GET["f1"];
$fp=fopen($file,"r");
$ch=$_GET["op"];
switch($ch)
{
    case 1 :
    $ft=filetype($file);
    echo "The type of file is : ". $ft;
    break;
    case 2:
    $lt=fileatime($file);
    echo "The last accessed time of file  is : ". date("F D Y H:i:s",$lt);
    break;
    case 3:
    $fs=filesize($file);
    echo "The size of file is : ".$fs;
    break;
    case 4:
    $b=unlink($file);
    if($b==1)
       echo "File is deleted.....";
    else
      echo "File is not deleted....";
}
?>