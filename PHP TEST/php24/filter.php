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
/**filter_input()、"min_range" 和"max_range" 选项
 * 验证输入值是否是整数且是否大于0小于256，
 * 如输入值为300，输出为整数有效.
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
 * filter_has_var()检测是否存在"POST" 类型的 "email" 输入变量
 *filter_input检测输入值是否是有效的邮件地址
 * 如输入值为109555@qq.com，输出值为输入邮箱合法.
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
 * filter_has_var()检测是否存在 "POST" 类型的 "url" 输入变量
 *filter_input对输入值进行净化（删除非法字符），并将其存储在 $url 变量中
 * 如输入值为http://www.W3非o法ol.com.c字符n/
 * 输出值为过滤后的url:http://www.W3ool.com.cn/
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