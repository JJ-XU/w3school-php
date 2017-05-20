<?php
/**
 * Created by PhpStorm.
 * User: xuwenjuan
 * Date:2017/5/20
 * Time:11:59 上午
 */

/**使用pdo连接数据库 封装查找函数*/
class DB{
/**定义私有属性*/
    private $host;
    private $port;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    private $dbtype;
    private $pdo;
    /**定义构造函数*/
    function __construct(){
        /**引入config.php文件*/
        include_once('config.php');
        /**给属性赋值*/
        $this->dbtype = $config['db'];
        $this->host  = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->charset = $config['charset'];
        $this->port = $config['port'];
        $this->dbname = $config['dbname'];
/**pdo连接数据库*/
        $this->pdo = new PDO("$this->dbtype:host=$this->host;dbname=$this->dbname","$this->username","$this->password");
/**设置字符编码*/
        $this->pdo->query("set names $this->charset");
    }

    /**
     * 定义执行查询sql语句的方法
     * @param {string} $sql 查询sql语句
     * @return array
     */
    public function query($sql){
        $res = $this->pdo->query($sql);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $res->fetchAll();
        return $arr;
    }

    /**
     * 查询表中的所有数据
     * @param {string} $tablename 表名
     * @return array
     */
    public function getAll($tablename){
        $res = $this->pdo->query("select * from $tablename");
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $res->fetchAll();
        return $arr;
    }
}
$db=new DB();
$city=$db->getAll('city');
print_r($city);