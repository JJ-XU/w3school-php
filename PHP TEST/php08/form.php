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
        $nameErr = "姓名不能为空";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameErr = "姓名只能包含字母";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "邮箱不能为空";
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

<h2>表单输入：</h2>

<p><span class="error">* 表示必填。</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    姓名: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    邮箱: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    性别:
    <input type="radio" name="sex" value="female">女
    <input type="radio" name="sex" value="male">男
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>

<?php
echo "<h2>表单输入数据:</h2>";
echo "姓名" . $name;
echo "<br>";
echo "邮箱" . $email;
echo "<br>";
echo "性别" . $sex;
?>

</body>
</html>