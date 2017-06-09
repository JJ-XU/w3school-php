<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Filter</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="int">
    <input type="email" name="email">
    <input type="text" name="url">
    <button type="submit">提交</button>
</form>
<?php
$intOptions = array(
    "options" => array
    (
        "min_range" => 0,
        "max_range" => 256
    )
);
/**
 * 验证输入值是否是整数且是否大于0小于256，
 */
if (!filter_has_var(INPUT_POST, "int")) {
    echo("输入类型不存在.<br>");
} else {
    if (!filter_input(INPUT_POST, "int", FILTER_VALIDATE_INT, $intOptions)) {
        echo "整数无效.<br>";
    } else {
        echo "整数有效.<br>";
    }
}
/**
 * 检测输入值是否是有效的邮件地址
 */
if (!filter_has_var(INPUT_POST, "email")) {
    echo("输入类型不存在.<br>");
} else {
    if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        echo "输入邮箱无效.<br>";
    } else {
        echo "输入邮箱合法.<br>";
    }
}
/**
 *对输入值进行净化（删除非法字符），并将其存储在 $url 变量中
 */
if (!filter_has_var(INPUT_POST, "url")) {
    echo("输入类型不存在.<br>");
} else {
    $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
    echo "过滤后的url:" . $url;
}
?>
</body>
</html>