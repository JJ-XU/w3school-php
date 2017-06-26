<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class Foo
 */
class Foo
{
    private $bar;

    /**
     * 输出私有变量
     * @param object Foo $object
     */
    public function debugBar(Foo $object)
    {
        echo $object->bar, "\n";
    }

    /**
     * 通过$this设置私有变量的值
     * @param string $value
     */
    public function setBar($value)
    {
        $this->bar = $value;
    }

    /**
     * 通过Foo类型值设置私有变量的值
     * @param object Foo $object
     * @param string $value
     */
    public function setForeignBar(Foo $object, $value)
    {
        $object->bar = $value;
    }
}

$a = new Foo();
$b = new Foo();
$a->setBar(1);
$b->setBar(2);
$a->debugBar($b);        // 2
$b->debugBar($a);        // 1
$a->setForeignBar($b, 3);
$b->setForeignBar($a, 4);
$a->debugBar($b);        // 3
$b->debugBar($a);        // 4
