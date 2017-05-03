<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "code";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM City WHERE id=2";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "删除成功";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM City";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>列表如下：<br>";
    echo "<table><tr><th>id</th><th>name</th><th>shengfen</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["uname"] . "</td></tr>";
    }
}
?>
