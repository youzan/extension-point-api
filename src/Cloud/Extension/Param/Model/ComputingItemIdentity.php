<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 减免的商品信息
 * @author Baymax
 * @create Thu Mar 10 20:03:22 CST 2022
 */
class ComputingItemIdentity implements \JsonSerializable {

    /**
     * 商品交易条目ID
     * @var int
     */
    private $businessId;



    /**
     * @return int
     */
    public function getBusinessId(): ?int
    {
        return $this->businessId;
    }

    /**
     * @param int $businessId
     */
    public function setBusinessId(?int $businessId): void
    {
        $this->businessId = $businessId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}