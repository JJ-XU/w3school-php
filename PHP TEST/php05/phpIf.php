<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP IF ELSE</title>
</head>
<body>
<?php
define("MAXNUM", 330);
function checkNum($num)
{
    if ($num > MAXNUM) {
        echo $num . "大于" . MAXNUM . "<br>";
    } else {
        echo $num . "小于" . MAXNUM . "<br>";
    }
}

checkNum(89);
checkNum(389);
?>
</body>
</html>