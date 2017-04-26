<?php
$servername = "localhost";
$username = "root";
$password = "root";
$conn = new mysqli($servername, $username, $password);
// 判断是否连接失败
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 创建数据库code
$sql = "CREATE DATABASE code";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
//关闭连接
$conn->close();
?>
