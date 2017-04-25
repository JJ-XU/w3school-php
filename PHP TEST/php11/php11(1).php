<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>PHP</title>
</head>
<body>
<h1>php session and $filter</h1>
<?php
//set session
$_SESSION["project"]="infoMask";
$_SESSION["name"]="lisi";
echo 'session';
?>
</body>
</html>