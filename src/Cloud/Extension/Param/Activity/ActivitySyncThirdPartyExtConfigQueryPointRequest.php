<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-21 23:32:37.0
 */
class ActivitySyncThirdPartyExtConfigQueryPointRequest implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总店id
     * @var int
     */
    private $rootKdtId;

    /**
     * 
     * @var int
     */
    private $versionNo;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



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
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}