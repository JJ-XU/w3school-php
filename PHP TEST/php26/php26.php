<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
/**
 * 使用mysqli进行数据库连接
 */
$con = mysqli_connect($servername,$username, $password,$dbname);

/**
 * 判断连接是否成功
 */
if (mysqli_connect_errno()) {
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con, "SELECT * FROM code");
echo "受影响行数: " . mysqli_affected_rows($con)."<br>";//返回前一个 Mysql 操作的受影响行数。

mysqli_query($con, "DELETE FROM code WHERE id>2");
echo "受影响行数: " . mysqli_affected_rows($con)."<br>";

$charset=mysqli_character_set_name($con);//返回数据库连接的默认字符集。
echo "默认字符集是: " . $charset;

mysqli_close($con);
