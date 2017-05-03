<?php
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jane</errfrom>
<heading>We are family</headding>
<body>Welcome</body>
</note>";
$xml = simplexml_load_string($myXMLData);
if ($xml == false) {
    echo "加载XML失败: ";
    foreach (libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
}
//报错原因如下：
//加载XML失败:
//Opening and ending tag mismatch: from line 4 and errfrom
//Opening and ending tag mismatch: heading line 5 and headding

$result = simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo "<br>" . $result->to . "<br>";//love
echo $result->heading . "<br>";//This is a heading
echo $result->message . "<br>";//This is a message
?>
