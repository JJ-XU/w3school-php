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
$num = 0;//��ʼ��
while ($num < 5) {
    echo "The number is $num <br>";
    $num++;
}
//do...while ����ִ��һ��
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
//ֱ�����
echo "ages�ĳ���" . count($ages) . "<br>";//���$ages�ĳ���
echo "С�������" . $ages[0] . "<br>" . "С��������" . $ages[1] . "<br>";
//ʹ��foreach���
foreach ($ages as $age) {
    echo "С�׵�����$age <br>";
}
$types = array("DELL" => "����", "Lenovo" => "����", "ASUS" => "��˶");
foreach ($types as $key => $value) {
    echo $key . "��������" . $value . "<br>";
}