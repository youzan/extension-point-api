<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\DayCrossBizTimeSettingDTO;

/**
 * 
 * @author Baymax
 * @create 2021-09-13 18:34:11.0
 */
class MultiStoreDTO implements \JsonSerializable {

    /**
     * 网点id
     * @var int
     */
    private $offlineId;

    /**
     * 网点名称
     * @var string
     */
    private $offlineName;

    /**
     * 营业时间信息
     * @var DayCrossBizTimeSettingDTO
     */
    private $customBusinessHours;



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

    /**
     * @return string
     */
    public function getOfflineName(): ?string
    {
        return $this->offlineName;
    }

    /**
     * @param string $offlineName
     */
    public function setOfflineName(?string $offlineName): void
    {
        $this->offlineName = $offlineName;
    }

    /**
     * @return DayCrossBizTimeSettingDTO
     */
    public function getCustomBusinessHours(): ?DayCrossBizTimeSettingDTO
    {
        return $this->customBusinessHours;
    }

    /**
     * @param DayCrossBizTimeSettingDTO $customBusinessHours
     */
    public function setCustomBusinessHours(?DayCrossBizTimeSettingDTO $customBusinessHours): void
    {
        $this->customBusinessHours = $customBusinessHours;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}