<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 店铺信息
 * @author Baymax
 * @create Wed Apr 20 09:57:08 CST 2022
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
     * 多网点id
     * @var int
     */
    private $offlineId;



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
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getOfflineId(): ?int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(?int $offlineId): void
    {
        $this->offlineId = $offlineId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}