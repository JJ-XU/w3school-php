<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "code";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//多行插入 方法一
$sql = "INSERT INTO City ( id, name, uname,parent_id,status)
VALUES (1, 'Guangzhou', 'Guangdong',2,0);";
$sql .= "INSERT INTO City ( id, name, uname,parent_id,status)
VALUES (2, 'Shaoguan', 'Guangdong',2,1);";
$sql .= "INSERT INTO City ( id, name, uname,parent_id,status)
VALUES (3, 'Zhengzhou', 'Henan',5,0);";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//方法二
$citys = $conn->prepare("INSERT INTO City (id, name, uname,parent_id,status) VALUES (?, ?, ?, ?, ?)");
$citys->bind_param("issii", $id, $name, $uname,$parent_id,$status);
// bind_param第一个参数 i - integer d - double s - string b - BLOB
$id = 4;
$name = "Qinghai";
$uname = "Shandong";
$parent_id=3;
$status=0;
$citys->execute();

$id = 5;
$name = "Dali";
$uname = "Yunnan";
$parent_id=3;
$status=0;
$citys->execute();

$citys->close();
$conn->close();
?>
