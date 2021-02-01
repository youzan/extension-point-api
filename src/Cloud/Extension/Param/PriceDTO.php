<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 价格信息
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class PriceDTO implements \JsonSerializable {

    /**
     * 优惠金额
     * @var int
     */
    private $promotionAmount;

    /**
     * 总价
     * @var int
     */
    private $totalPrice;

    /**
     * 运费
     * @var int
     */
    private $postage;

    /**
     * 现价
     * @var int
     */
    private $currentPrice;

    /**
     * 原价
     * @var int
     */
    private $originPrice;



    /**
     * @return int
     */
    public function getPromotionAmount(): ?int
    {
        return $this->promotionAmount;
    }

    /**
     * @param int $promotionAmount
     */
    public function setPromotionAmount(?int $promotionAmount): void
    {
        $this->promotionAmount = $promotionAmount;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(?int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getCurrentPrice(): ?int
    {
        return $this->currentPrice;
    }

    /**
     * @param int $currentPrice
     */
    public function setCurrentPrice(?int $currentPrice): void
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return int
     */
    public function getOriginPrice(): ?int
    {
        return $this->originPrice;
    }

    /**
     * @param int $originPrice
     */
    public function setOriginPrice(?int $originPrice): void
    {
        $this->originPrice = $originPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}