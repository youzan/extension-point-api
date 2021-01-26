<?php

namespace Com\Youzan\Cloud\Extension\Param\Plugin;



/**
 * 折扣权益
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtTemplateDiscountDTO implements \JsonSerializable {

    /**
     * 打折。范围[1,100):如95表示打9.5折）
     * @var int
     */
    private $discount;



    /**
     * @return int
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(?int $discount): void
    {
        $this->discount = $discount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}