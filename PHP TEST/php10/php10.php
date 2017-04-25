<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>PHP FILE</title>
</head>
<body>
<?php
echo "use readfile<br>";
echo readfile('ajax_tips.txt');
echo "use fread<br>";
$file = fopen("tip2.txt", "r") or die("Unable to open file!");
echo fread($file, filesize("tip2.txt"));
fclose($file);
echo "uses fgets<br>";
$myfile = fopen("ajax_tips.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "uses while(!feof(fileText))<br>";
$myfile = fopen("ajax_tips.txt", "r") or die("Unable to open file!");
while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "use write method<br>";
$tip = fopen("tips.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($tip, $txt);
$txt = "Jane Doe\n";
fwrite($tip, $txt);
fclose($tip);
?>
</body>
</html>

