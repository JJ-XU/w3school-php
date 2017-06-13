<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * 获取当前工作目录
 */
echo getcwd() . "<br>";

/**
 * 改变当前工作目录
 */
chdir("images");

/**
 * 再次获取当前工作目录
 */
echo getcwd();

/**
 * 读取当前工作目录
 */
$dir = dir(getcwd());

echo "Handle: " . $dir->handle . "<br>";//handle属性
echo "Path: " . $dir->path . "<br>";//path属性

/**
 * 循环输出当前工作目录中的文件
 */
while (($file = $dir->read()) !== false) {
    echo "filename: " . $file . "<br>";
}

/**
 * 关闭当前工作目录
 */
$dir->close();
