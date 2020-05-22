<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * shop复合Id
 * @author Baymax
 * @create Thu Apr 23 18:07:47 CST 2020
 */
class ShopCompositeId implements \JsonSerializable {

    /**
     * 门店ID
     * @var int
     */
    private $kdtId;

    /**
     * 网点ID
     * @var int
     */
    private $shopId;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}