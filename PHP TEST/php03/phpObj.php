<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php object</title>
</head>
<body>
<?php

class People
{
    function People($name)
    {
        $this->name = $name;
    }
}

$person = new People("zhangsan");
var_dump($person->name) //string(8) "zhangsan"
?>
</body>
</html>