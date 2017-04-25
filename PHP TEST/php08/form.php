<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>php form</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
$nameErr = $emailErr = "";
$name = $email = $sex = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "��������Ϊ��";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameErr = "����ֻ�ܰ�����ĸ";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "���䲻��Ϊ��";
    } else {
        $email = test_input($_POST["email"]);
    }

    $sex = test_input($_POST["sex"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>�����룺</h2>

<p><span class="error">* ��ʾ���</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    ����: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    ����: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    �Ա�:
    <input type="radio" name="sex" value="female">Ů
    <input type="radio" name="sex" value="male">��
    <br><br>
    <input type="submit" name="submit" value="�ύ">
</form>

<?php
echo "<h2>����������:</h2>";
echo "����" . $name;
echo "<br>";
echo "����" . $email;
echo "<br>";
echo "�Ա�" . $sex;
?>

</body>
</html>