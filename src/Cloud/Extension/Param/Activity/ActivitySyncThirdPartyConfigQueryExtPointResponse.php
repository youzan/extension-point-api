<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-21 23:32:37.0
 */
class ActivitySyncThirdPartyConfigQueryExtPointResponse implements \JsonSerializable {

    /**
     * 配置内容
     * @var string
     */
    private $configContent;

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
     * @return string
     */
    public function getConfigContent(): ?string
    {
        return $this->configContent;
    }

    /**
     * @param string $configContent
     */
    public function setConfigContent(?string $configContent): void
    {
        $this->configContent = $configContent;
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