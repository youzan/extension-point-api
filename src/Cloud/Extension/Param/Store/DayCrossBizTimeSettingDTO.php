<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\DayCrossTimeSectionDTO;

/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class DayCrossBizTimeSettingDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $type;

    /**
     * 
     * @var bool
     */
    private $onlyBusinessTimeOpen;

    /**
     * 
     * @var int
     */
    private $timeRangeType;

    /**
     * 
     * @var array
     */
    private $openingTimeSections;



    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function getOnlyBusinessTimeOpen(): ?bool
    {
        return $this->onlyBusinessTimeOpen;
    }

    /**
     * @param bool $onlyBusinessTimeOpen
     */
    public function setOnlyBusinessTimeOpen(?bool $onlyBusinessTimeOpen): void
    {
        $this->onlyBusinessTimeOpen = $onlyBusinessTimeOpen;
    }

    /**
     * @return int
     */
    public function getTimeRangeType(): ?int
    {
        return $this->timeRangeType;
    }

    /**
     * @param int $timeRangeType
     */
    public function setTimeRangeType(?int $timeRangeType): void
    {
        $this->timeRangeType = $timeRangeType;
    }

    /**
     * @return array
     */
    public function getOpeningTimeSections(): ?array
    {
        return $this->openingTimeSections;
    }

    /**
     * @param array $openingTimeSections
     */
    public function setOpeningTimeSections(?array $openingTimeSections): void
    {
        $this->openingTimeSections = $openingTimeSections;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}