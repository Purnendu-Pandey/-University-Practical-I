<!--
Q.1) Write a PHP program to read two file names from user and append content of first file into 
second file. 
-->

<!-- HTML FILE -->
<form action="Slip24.php" method="post">
        Enter 1st file<input type="text" name="f1"><br><br>
        Enter 2nd file<input type="text" name="f2"><br><br>
        <input type="submit" value="submit">
    </from>

<!-- PHP FILE -->
<?php
$f1=$_POST['f1'];
$f2=$_POST['f2'];
$file1=fopen($f1,"r");
$file2=fopen($f2,"w");
while(!feof($file1))
{
    $x=fread($file1,filesize($f1));
    fwrite($file2,$x);
}
echo "File Appaend";
fclose($file1);
fclose($file2);
?>