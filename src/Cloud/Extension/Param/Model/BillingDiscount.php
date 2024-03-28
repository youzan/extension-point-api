<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\Goods;

/**
 * 优惠详情
 * @author Baymax
 * @create Wed Aug 09 16:47:39 CST 2023
 */
class BillingDiscount implements \JsonSerializable {

    /**
     * 商品及均摊优惠详情
     * @var array
     */
    private $goodsList;

    /**
     * 订单总支付金额（单位/分）
     * @var int
     */
    private $pay;

    /**
     * 订单总优惠（单位/分）
     * @var int
     */
    private $decrease;



    /**
     * @return array
     */
    public function getGoodsList(): ?array
    {
        return $this->goodsList;
    }

    /**
     * @param array $goodsList
     */
    public function setGoodsList(?array $goodsList): void
    {
        $this->goodsList = $goodsList;
    }

    /**
     * @return int
     */
    public function getPay(): ?int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(?int $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}