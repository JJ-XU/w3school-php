<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class Test
 */
class Test
{
    /**
     * 私有方法输出bar字符串
     */
    private function foo()
    {
        print("bar");
    }

    /**
     * 静态方法bar调用foo方法
     * @param object $a 对象
     */
    static public function bar($a)
    {
        $a->foo();
    }
}

$test = new Test();
Test::bar($test);//::是静态方法调用的方式，输出bar


