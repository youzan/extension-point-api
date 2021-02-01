<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\DeliveryItemMsgDTO;

/**
 * 当前发货信息
 * @author Baymax
 * @create 2020-08-19 16:02:23.0
 */
class CurrentDeliveryRequestDTO implements \JsonSerializable {

    /**
     * 11, &quot;快递 - 系统呼叫快递&quot;; 12, &quot;快递 - 商家呼叫快递&quot;; 13, &quot;快递 - 无需物流&quot;; 14, &quot;快递 - 电子面单&quot;; 15, &quot;快递-微信物流&quot;; 21, &quot;同城送 - 商家呼叫三方配送&quot;; 22, &quot;同城送 - 商家自主配送&quot;; 23, &quot;同城送 - 系统呼叫三方配送&quot;; 24, &quot;自提 - 核销提货&quot;; 92, &quot;自提 - 无码提货&quot;; 91, &quot;自提 - 有码提货&quot;
     * @var int
     */
    private $deliveryType;

    /**
     * 发货商品信息
     * @var array
     */
    private $deliveryItems;



    /**
     * @return int
     */
    public function getDeliveryType(): ?int
    {
        return $this->deliveryType;
    }

    /**
     * @param int $deliveryType
     */
    public function setDeliveryType(?int $deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return array
     */
    public function getDeliveryItems(): ?array
    {
        return $this->deliveryItems;
    }

    /**
     * @param array $deliveryItems
     */
    public function setDeliveryItems(?array $deliveryItems): void
    {
        $this->deliveryItems = $deliveryItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}