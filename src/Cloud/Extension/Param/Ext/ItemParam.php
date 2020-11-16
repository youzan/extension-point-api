<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * 多个商品参数数组
 * @author Baymax
 * @create 2020-11-16 20:06:15.0
 */
class ItemParam implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}