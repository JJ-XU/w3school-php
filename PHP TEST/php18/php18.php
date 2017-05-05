<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP XML</title>
</head>
<body>
<?php
$xml = new DOMDocument();
$xml->load("book.xml");
$items = $xml->documentElement;
foreach ($items->childNodes as $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
</body>
</html>
