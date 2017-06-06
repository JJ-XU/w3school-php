<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP cookie</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
<?php
$accountErr = $passwordErr = "";
$account = $password = "";
/**
 * 判断是否是post方式传入数据
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["account"])) {
        $accountErr = "账号不能为空";
    } else if ($_POST["account"] != "xwj") {
        $accountErr = "账号不正确";
    } else {
        $account = test_input($_POST["account"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "密码不能为空";
    } else if (md5($_POST["password"]) != md5('1234')) {
        $passwordErr = "密码不正确";
    } else {
        $password = test_input($_POST["password"]);
    }
}
$cookie_name = "user";
$value = ['account' => $account, 'password' => md5($password)];
$cookie_value = implode(',', $value);
/**设置cookie，将用户名和密码通过cookie保存*/
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
/**
 *对传入的数据进行删除空格、反斜线以及过滤特殊符号处理
 * @param $data 传入的数据
 * @return string 返回处理后的数据
 */
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p> 账号： <input type="text" name="account"> <span class="error">* <?php echo $accountErr; ?></span></p>

    <p>密码： <input type="password" name="password"> <span class="error">* <?php echo $passwordErr; ?></span></p>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>