<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP XML</title>
    <style>
        table {
            border: 1px solid #eee;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        table td {
            padding-left: 10px;
        }
    </style>
</head>
<body>
<?php
$xml = simplexml_load_file("book.xml");
if ($xml == false) {
    die("Error: Cannot create object");
}
//输出方式一
echo $xml->book[0]->title . "<br>";//JavaScript 高级程序设计
echo $xml->book[1]['category'];//LITERATURE
//输出方式二
echo "<table><tr><th>标题</th><th>作者</th><th>年份</th><th>价格</th></tr>";
foreach ($xml->children() as $book) {//输出所有的信息
    echo "<tr><td>" . $book->title . "</td>" .
        "<td>" . $book->author . "</td>" .
        "<td>" . $book->year . "</td>" .
        "<td>" . $book->price . "</td><tr>";
}
echo "</table>";
//输出方式三
$parser = xml_parser_create();//创建XML解析器
// 起始元素处理器
function start($parser, $element_name, $element_attrs)
{
    switch ($element_name) {
        case "title":
            echo "title: ";
            break;
        case "author":
            echo "author: ";
            break;
        case "year":
            echo "year: ";
            break;
        case "price":
            echo "price: ";
    }
}

// 终止元素处理器
function stop($parser, $element_name)
{
    echo "<br>";
}

//事件处理器使用的函数
function char($parser, $data)
{
    echo $data;
}

//xml_set_element_handler() 函数建立起始和终止元素处理器。
xml_set_element_handler($parser, "start", "stop");
// xml_set_character_data_handler建立字符数据处理器.
xml_set_character_data_handler($parser, "char");
// 打开一个xml文件
$fp = fopen("book.xml", "r");
// xml_error_string() 函数获取 XML解析器的错误描述
//xml_get_current_line_number() 函数获取 XML解析器的当前行号
while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
}
// 释放XML解析器
xml_parser_free($parser);
?>
</body>
</html>
