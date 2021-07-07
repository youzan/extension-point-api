<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-07 11:55:49.0
 */
class ActivitySyncThirdPartyExtPointResponse implements \JsonSerializable {

    /**
     * 是否同步
     * @var bool
     */
    private $isNeedSync;

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
     * @return bool
     */
    public function getIsNeedSync(): ?bool
    {
        return $this->isNeedSync;
    }

    /**
     * @param bool $isNeedSync
     */
    public function setIsNeedSync(?bool $isNeedSync): void
    {
        $this->isNeedSync = $isNeedSync;
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