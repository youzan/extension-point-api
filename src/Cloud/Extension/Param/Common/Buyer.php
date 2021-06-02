<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 下单用户信息
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class Buyer implements \JsonSerializable {

    /**
     * 下单用户ID
     * @var int
     */
    private $buyerId;

    /**
     * 下单用户手机号
     * @var string
     */
    private $buyerPhone;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(?string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}