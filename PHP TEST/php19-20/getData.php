<?php
$q = $_GET['q'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql = mysqli_prepare($conn,"SELECT * FROM `code` WHERE name like '%".$q."%' or id='".$q."'");
$sql->execute();
$sql->bind_result($id,$name,$age,$job);
    while($sql->fetch()){
        echo "防止sql注入攻击方式一，查询结果：";
        echo "<ol>";
        echo "<li>id->" . $id. "</li>";
        echo "<li>name->" .$name . "</li>";
        echo "<li>age->" .$age. "</li>";
        echo "<li>job->" .$job . "</li>";
        echo "</ol>";
    }
mysqli_close($conn);
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$q=mysqli_real_escape_string($conn,$q);
$sql="SELECT * FROM code WHERE name like '%" . $q . "%' or id='" . $q . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "防止sql注入攻击方式二，查询结果：";
        echo "<ol>";
        echo "<li>id->" . $row['id'] . "</li>";
        echo "<li>name->" . $row['name'] . "</li>";
        echo "<li>age->" . $row['age'] . "</li>";
        echo "<li>job->" . $row['job'] . "</li>";
        echo "</ol>";
    }

mysqli_close($conn);
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM code WHERE name like '%" . $q . "%' or id='" . $q . "'");
$stmt->execute();
$allrows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($allrows as $allrow){
        echo "防止sql注入攻击方式三，查询结果：";
        echo "<ol>";
        echo "<li>id->" . $allrow['id'] . "</li>";
        echo "<li>name->" . $allrow['name'] . "</li>";
        echo "<li>age->" . $allrow['age'] . "</li>";
        echo "<li>job->" . $allrow['job'] . "</li>";
        echo "</ol>";
    }
$conn=null;
?>