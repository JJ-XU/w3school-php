<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    文件名: <input type="text" name="filename">
    E-mail: <input type="text" name="email">
    <input type="submit">
</form>

<?php
/**
 * 判断请求方式是否是post
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['filename'];
    $email = $_POST['email'];
    if (empty($name)) {
        echo "文件名是空的 ";
    } else {
        echo "文件名：" . $name . " ";
    }
    $str = empty($email) ? "邮件名是空的" : "邮件名：" . $email;
    echo $str;
}
?>
</body>
</html>