<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use StdClass;

/**
 * 请求响应
 * @author Baymax
 * @create Fri Aug 22 11:37:16 CST 2025
 */
class ActivitySyncThirdPartyExtPointResponse implements \JsonSerializable {

    /**
     * 是否同步
     * @var bool
     */
    private $isNeedSync;

    /**
     * 版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
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