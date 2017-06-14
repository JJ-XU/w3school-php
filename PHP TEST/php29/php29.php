<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>多维数组排序</title>
</head>
<body>
<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

$students = [
    256 => ['name' => 'Jon', 'grade' => 96.0],
    2 => ['name' => 'Vance', 'grade' => 86.1],
    9 => ['name' => 'Stephen', 'grade' => 94.0],
    364 => ['name' => 'Vance', 'grade' => 87.5],
    68 => ['name' => 'Vance', 'grade' => 74.6]
];//多维数组

/**
 *按名字进行排序
 * @param array $x
 * @param array $y
 * @return int
 */
function nameSort($x, $y)
{
    return strcasecmp($x['name'], $y['name']);
}

/**
 * 按成绩进行排序
 * @param array $x
 * @param array $y
 * @return bool
 */
function gradeSort($x, $y)
{
    return ($x['grade'] < $y['grade']);
}

echo '<h2>初始的数组：</h2><pre>' . print_r($students, 1) . '</pre>';
uasort($students, 'nameSort');//使用nameSort函数对数组按键值进行排序
echo '<h2>按名字排序的数组：</h2><pre>' . print_r($students, 1) . '</pre>';
uasort($students, 'gradeSort');//使用gradeSort函数对数组按键值进行排序
echo '<h2>按成绩排序后的数组：</h2><pre>' . print_r($students, 1) . '</pre>';
?>
</body>
</html>