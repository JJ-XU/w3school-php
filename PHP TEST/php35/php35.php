<?php
/**
 * @author 许文娟 <xuwenjuan@atlasdata.com.cn>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Class Item
 */
class Item
{
    protected $label = "梨";//定义被保护的属性$label
    protected $price = 3.8;//定义被保护的属性$price

    /**
     * 获取标签
     * @return string 返回$label的值
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * 获取价格
     * @return float 返回$price的值
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 设置标签
     * @param string $label 需设置的标签值
     */
    public function setLabel($label)
    {
        if (is_string($label)) {
            $this->label = (string)$label;
        }
    }

    /**
     * 设置价格
     * @param float $price 需设置的价格
     */
    public function setPrice($price)
    {
        if (is_numeric($price)) {
            $this->price = (float)$price;
        }
    }
}

$item = new Item();
$label = $item->getLabel();//输出“梨”
$price = $item->getPrice();//输出“3.8”
echo "$label:$price<br>";
$item->setLabel("苹果");
$item->setPrice("5.0");
$label = $item->getLabel();//输出“苹果”
$price = $item->getPrice();//输出“5.0”
echo "$label:$price";

