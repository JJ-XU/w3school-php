<?php
function hobbies($name, $sport)
{
    switch ($sport) {
        case "playing basketball":
            echo "$name like $sport <br>";
            break;
        case "running":
            echo "$name like $sport <br>";
            break;
        case "swimming":
            echo "$name like $sport <br>";
            break;
    }
}

hobbies("lily", "playing basketball");
hobbies("Abel", "swimming");

//while
$num = 0;//初始化
while ($num < 5) {
    echo "The number is $num <br>";
    $num++;
}
//do...while 至少执行一次
$x = 6;
while ($x <= 5) {
    echo "while:The number is $x <br>";
    $num++;
}

do {
    echo "do while:The number is $x <br>";
    $num++;
} while ($x <= 5);

//for
for ($i = 0; $i < 5; $i++) {
    echo "for:The number is $i <br>";
}
//foreach
$ages = array(10, 20, 30, 40);
//直接输出
echo "ages的长度" . count($ages) . "<br>";//输出$ages的长度
echo "小红的年龄" . $ages[0] . "<br>" . "小樊的年龄" . $ages[1] . "<br>";
//使用foreach输出
foreach ($ages as $age) {
    echo "小米的年龄$age <br>";
}
$types = array("DELL" => "戴尔", "Lenovo" => "联想", "ASUS" => "华硕");
foreach ($types as $key => $value) {
    echo $key . "的中文名" . $value . "<br>";
}