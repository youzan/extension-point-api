<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2020-11-17 00:05:12.0
 */
class ItemParam implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 商品ID
     * @var int
     */
    private $itemId;



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

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}