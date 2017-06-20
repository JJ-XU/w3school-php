<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class attributeAccessControl
 */
class attributeAccessControl
{
    public $public = 'Public';//定义公有的属性$public
    protected $protected = 'Protected';//定义被保护的属性$protected
    private $private = 'Private';//定义私有的属性$private

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

$obj = new attributeAccessControl();
$obj->printHello(); // 输出 Public、Protected 和 Private
echo $obj->public . "<br>"; // 这行能被正常执行
echo $obj->protected; // 受保护的属性在类的外部不能直接调用
echo $obj->private; // 私有的属性在类的外部不能直接调用

/**
 * Class attributeAccessControlOne
 */
class attributeAccessControlOne extends attributeAccessControl
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    /**
     * 输出成员变量
     */
    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

$obj2 = new attributeAccessControlOne();
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined
echo $obj2->public . "<br>"; // 这行能被正常执行
echo $obj2->private . "<br>"; // 未定义 private
echo $obj2->protected . "<br>"; //受保护的属性在类的外部不能直接调用

