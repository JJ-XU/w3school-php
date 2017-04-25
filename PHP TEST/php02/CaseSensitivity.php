<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>php case sensitivity</title>
</head>
<body>
<?php
$color = 'green';
ECHO "树叶的颜色" . $color . "<br>";
echo "头发的颜色" . $COLOR . "<br>";
EcHo "天空的颜色" . $Color . "<br>";
/*php对于echo的大小写不敏感，但是对于变量的大小写敏感，
只有第一句能输出变量$color，后两句会报错，变量不存在*/
?>
</body>
</html>
