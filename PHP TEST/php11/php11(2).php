<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
<h1>php session and $filter</h1>
<?php
//get and set session
echo "this is a project:" . $_SESSION["project"] . "<br>";
echo "this name is:" . $_SESSION["name"] . "<br>";
$_SESSION["name"] = "李四";
echo "now,name is:" . $_SESSION["name"] . "<br>";
session_unset();//remove all session
?>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach (filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>
<?php
//filter_var($variable,FILTER_SANITIZE_STRING)判断是否是字符串
// filter_var($variable,FILTER_VALIDATE_INT)判断是否是整型
//filter_var($variable,FILTER_VALIDARTE_IP)判断是否是ip地址
//filter_var($variable,FILTER_VALIDATE_EMAIL)判断是否是邮箱地址
//filter_var($variable,FILTER_VALIDATE_URL)判断是否是url

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip 是有效的ip地址ַ");
} else {
    echo("$ip 不是有效的ip地址ַ");
}
?>
</body>
</html>