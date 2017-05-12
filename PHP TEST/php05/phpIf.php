<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP IF ELSE</title>
</head>
<body>
<?php
define("MAXNUM", 330);
/**
 * 检查输入值与300之间的大小关系
 * @param $num
 */
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