<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = file_get_contents('city.sql');
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    echo "表city创建成功并成功插入多条数据";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>