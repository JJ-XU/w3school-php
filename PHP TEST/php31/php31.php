<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP array</title>
</head>
<body>
<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

$cities[] = "<b>北京</b>";    //等同于$cities[0] = "北京"
$cities[] = "<b>天津</b>";    //等同于$cities[1] = "天津"
$cities[] = "<b>上海</b>";    //等同于$cities[2] = "上海"
$cities[] = "<b>深圳</b>";    //等同于$cities[3] = "深圳"

/*
** 统计元素个数
*/
$indexLimit = count($cities);   //把数组中元素的个数赋给$indexLimit

/*
*/
for ($index = 0; $index < $indexLimit; $index++) {
}

?>
</body>
</html>
