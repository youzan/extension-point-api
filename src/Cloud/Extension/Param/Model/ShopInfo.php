<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 店铺信息
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class ShopInfo implements \JsonSerializable {

    /**
     * 当前店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总店id
     * @var int
     */
    private $rootKdtId;



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
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}