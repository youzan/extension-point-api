<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create Thu Sep 19 19:45:04 CST 2019
 */
class AuditRecordRequestDTO implements \JsonSerializable {

    /**
     * 标识店铺唯一渠道门店id
     * @var string
     */
    private $originalShopId;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getOriginalShopId(): ?string
    {
        return $this->originalShopId;
    }

    /**
     * @param string $originalShopId
     */
    public function setOriginalShopId(?string $originalShopId): void
    {
        $this->originalShopId = $originalShopId;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}