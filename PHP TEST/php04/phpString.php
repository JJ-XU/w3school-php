<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php string</title>
</head>
<body>
<?php
$str = 'Hello Atlasdata';
echo strlen($str) . ' <br>';//15
echo str_word_count($str) . ' <br>';//2
echo strrev($str) . ' <br>';//atadsaltA olleH
echo strpos($str, 'A') . ' <br>';//6
echo str_replace('Hello', '你好', $str) . ' <br>';//你好 Atlasdata
?>
</body>
</html>