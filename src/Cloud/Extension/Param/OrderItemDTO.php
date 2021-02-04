<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 订单条目
 * @author Baymax
 * @create Tue Sep 25 17:50:17 CST 2018
 */
class OrderItemDTO implements \JsonSerializable {

    /**
     * 数量
     * @var int
     */
    private $quantity;

    /**
     * 商品名称
     * @var string
     */
    private $productName;



    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}