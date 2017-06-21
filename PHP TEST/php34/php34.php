<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class Bar
 */
class Bar
{
    /**
     * 定义公有的方法test，用于调用testPrivate和testPublic方法
     */
    public function test()
    {
        $this->testPrivate();
        $this->testPublic();
    }

    /**
     * 定义公有的方法testPublic
     */
    public function testPublic()
    {
        echo "Bar::testPublic\n";
    }

    /**
     * 定义私有的方法testPrivate
     */
    private function testPrivate()
    {
        echo "Bar::testPrivate\n";
    }
}

/**
 * Class Foo
 */
class Foo extends Bar
{
    /**
     * 重写父类的testPublic方法
     */
    public function testPublic()
    {
        echo "Foo::testPublic\n";
    }

    /**
     * 自定义的testPrivate方法
     */
    private function testPrivate()
    {//因私有的方法不会被继承
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();

/**
 * foo类继承了 Bar类的test()方法
 */
$myFoo->test();//输出Bar::testPrivate Foo::testPublic

