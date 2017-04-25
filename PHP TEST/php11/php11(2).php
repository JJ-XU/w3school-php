<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
$_SESSION["name"] = "����";
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
//filter_var($variable,FILTER_SANITIZE_STRING)�ж��Ƿ�Ϊ�ַ���
// filter_var($variable,FILTER_VALIDATE_INT)�ж��Ƿ�������
//filter_var($variable,FILTER_VALIDARTE_IP)�ж��Ƿ���ip��ַ
//filter_var($variable,FILTER_VALIDATE_EMAIL)�ж��Ƿ��������ַ
//filter_var($variable,FILTER_VALIDATE_URL)�ж��Ƿ���url

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip ����Ч��IP��ַ");
} else {
    echo("$ip ������Ч��IP��ַ");
}
?>
</body>
</html>