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
 *使用mysqli进行数据库连接
 */
$con=mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_autocommit($con,FALSE);//关闭自动提交数据库修改功能

/**
 * 插入数据到code表
 */
mysqli_query($con,"INSERT INTO code (name,age,job) VALUES ('Peter',35,'doctor')");
mysqli_query($con,"INSERT INTO code (name,age,job) VALUES ('Glenn',23,'teacher')");

echo mysqli_get_proto_info($con)."<br>";//返回MySQL协议版本
echo mysqli_get_host_info($con)."<br>";//返回 MySQL 服务器主机名和连接类型
echo mysqli_get_server_info($con)."<br>";//返回MySQL服务器版本
echo mysqli_insert_id($con);//返回最后一次查询中使用的自动生成 id

/**
 * 提交当前事务
 */
mysqli_commit($con);

/**
 * 关闭数据库连接
 */
mysqli_close($con);