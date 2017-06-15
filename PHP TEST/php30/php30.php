<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 获取文件扩展名</title>
</head>
<body>
<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * 方式一：使用strrchr获取文件扩展名
 * @param string $file_name
 * @return string 返回文件扩展名
 */
function getExtOne($file_name)
{
    return strrchr($file_name, '.');
}

/**
 * 方式二：使用substr获取文件扩展名
 * @param string $file_name
 * @return string 返回文件扩展名
 */
function getExtTwo($file_name)
{
    return substr($file_name, strrpos($file_name, '.'));
}

/**
 * 方式三：使用array_pop获取文件扩展名
 * @param string $file_name
 * @return string 返回文件扩展名
 */
function getExtThree($file_name)
{
    $arr = explode('.', $file_name);
    return array_pop($arr);
}

/**
 * 方式四：使用pathinfo获取文件扩展名
 * @param string $file_name
 * @return string 返回文件扩展名
 */
function getExtFour($file_name)
{
    $p = pathinfo($file_name);
    return $p['extension'];
}

/**
 * 方式五：使用strrev获取文件扩展名
 * @param string $file_name
 * @return string 返回文件扩展名
 */
function getExtFive($file_name)
{
    return strrev(substr(strrev($file_name), 0, strpos(strrev($file_name), '.')));
}

$path = 'dir/upload.image.jpg';
echo "getExtOne方法获取{$path}的文件名：" . getExtOne($path) . '<br>';//.jpg
echo "getExtTwo方法获取{$path}的文件名：" . getExtTwo($path) . '<br>';//.jpg
echo "getExtThree方法获取{$path}的文件名：" . getExtThree($path) . '<br>';//jpg
echo "getExtFour方法获取{$path}的文件名：" . getExtFour($path) . '<br>';//jpg
echo "getExtFive方法获取{$path}的文件名：" . getExtFive($path) . '<br>';//jpg
?>
</body>
</html>