<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 店铺信息
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class ShopInfo implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店ID，单点时同kdtId
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