<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-11-17 00:05:12.0
 */
class ItemTradeCloudExtModel implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $itemId;

    /**
     * 商品ID
     * @var int
     */
    private $kdtId;

    /**
     * 商品扩展数据。key有：warehouse
     * @var stdClass
     */
    private $extraInfo;



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

    /**
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}