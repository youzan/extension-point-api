<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtCalculateTariffItemResponseDTO;

/**
 * 出参
 * @author Baymax
 * @create Thu Dec 24 11:30:20 CST 2020
 */
class ExtCalculateTariffResponseDTO implements \JsonSerializable {

    /**
     * 订单no
     * @var string
     */
    private $orderNo;

    /**
     * 商品列表
     * @var array
     */
    private $goodsPreferences;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return array
     */
    public function getGoodsPreferences(): array
    {
        return $this->goodsPreferences;
    }

    /**
     * @param array $goodsPreferences
     */
    public function setGoodsPreferences(array $goodsPreferences): void
    {
        $this->goodsPreferences = $goodsPreferences;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}