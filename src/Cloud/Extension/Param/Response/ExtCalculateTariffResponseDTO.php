<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtCalculateTariffItemResponseDTO;

/**
 * 出参
 * @author Baymax
 * @create 2020-12-24 11:30:20.0
 */
class ExtCalculateTariffResponseDTO implements \JsonSerializable {

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
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
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return array
     */
    public function getGoodsPreferences(): ?array
    {
        return $this->goodsPreferences;
    }

    /**
     * @param array $goodsPreferences
     */
    public function setGoodsPreferences(?array $goodsPreferences): void
    {
        $this->goodsPreferences = $goodsPreferences;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}