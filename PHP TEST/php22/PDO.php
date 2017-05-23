<?php
/**
 * Created by PhpStorm.
 * User: xuwenjuan
 * Date:2017/5/20
 * Time:11:59 上午
 */

/**使用pdo连接数据库 封装查找函数*/
class DB
{
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
    function __construct()
    {
        /**引入config.php文件*/
        include_once('config.php');
        /**给属性赋值*/
        $this->dbtype = $config['db'];
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->charset = $config['charset'];
        $this->port = $config['port'];
        $this->dbname = $config['dbname'];
        /**pdo连接数据库*/
        $this->pdo = new PDO("$this->dbtype:host=$this->host;dbname=$this->dbname", "$this->username", "$this->password");
        /**设置字符编码*/
        $this->pdo->query("set names $this->charset");
    }

    /**
     * 定义执行查询sql语句的方法
     * @param {string} $sql 查询sql语句
     * @return array
     */
    public function query($sql)
    {
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
    public function getAll($tablename)
    {
        $res = $this->pdo->query("select * from $tablename");
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $res->fetchAll();
        return $arr;
    }

    /**
     * 根据查询条件将表中的is_delete字段设为1
     * @param {string} $tablename 表名
     * @param {string} $where 查询条件
     * @return int
     */
    public function delete($tablename, $where)
    {
        $sql = "update $tablename set is_delete=1 where $where";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    /**
     * 根据查询条件和需要修改的数据修改相应表数据
     * @param $tablename 表名
     * @param $arr 以关联数组的形式传入需要修改的值
     * @param $where 查询条件
     * @return int 0表示没成功 1表示成功
     */
    public function update($tablename, $arr, $where)
    {
        $str = "";
        foreach ($arr as $k => $v) {
            $str .= "$k='" . $v . "',";
        }
        /**去除最后一个逗号*/
        $str = substr($str, 0, -1);
        /**拼接sql语句*/
        $sql = "update $tablename set $str where $where";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    /**
     *根据id进行查询，并修改相应数据
     * @param {string} $tablename 表名
     * @param mixed[] $arr 需要修改的数据
     * @param {int} $id 表的id字段
     * @return int
     */
    public function updateById($tablename, $arr, $id)
    {
        $str = "";
        foreach ($arr as $k => $v) {
            $str .= "$k='" . $v . "',";
        }
        /**去除最后一个逗号*/
        $str = substr($str, 0, -1);
        /**拼接sql语句*/
        $sql = "update $tablename set $str where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    /**
     * 根据关联数组的数据进行插入
     * @param {string} $tablename 表名
     * @param mixed[] $arr 关联数组 [列名=>需要的数据]
     */
    public function insert($tablename, $arr)
    {
        if (is_array($arr)) {
            $keys = array();
            $values = '';
            foreach ($arr as $k => $v) {
                $keys[] = $k;
                $values .= "'" . $v . "',";
            }
            $column = implode(',', $keys);
            $values = substr($values, 0, -1);
            try {
                $stmt = $this->pdo->prepare("insert into " . $tablename . "($column) values($values)");
                $stmt->execute();
                echo "数据插入成功";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}

$db = new DB();
$city = $db->getAll("city");
$db->delete("city", "id=2");
$db->update("city", ["name" => "梧州", "uname" => "wuzhou"], "id=4");
$db->updateById("city", ["name" => "广西", "uname" => "guangxi"], 6);
$db->insert('city', ["name" => "潮汕", "uname" => "chaoshang", "parent_id" => 1]);