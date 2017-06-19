<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class A
 */
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined(';
            echo get_class($this);
            echo ")\n";
        } else {
            echo '$this is not defined.';
        }
    }
}

/**
 * Class B
 */
class B
{
    function bar()
    {
        A::foo();//报错，原因是::是类中静态方法和静态属性的引用方法，并输出$this is not defined.
    }
}

/**
 * 实例化A
 */
$a = new A();
$a->foo();//输出$this is defined(A)
A::foo();//报错,并输出$this is not defined.

/**
 * 实例化B
 */
$b = new B();
$b->bar();//$this is defined(B)，且报错
B::bar();//报错，并输出$this is not defined.

