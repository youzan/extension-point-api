<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\OpeningTimeSectionDTO;

/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class BusinessTimeSettingDTO implements \JsonSerializable {

    /**
     * 营业时间类型 1：一直营业，2：休息，3：特定时间段营业
     * @var int
     */
    private $type;

    /**
     * 只允许营业时间下单
     * @var bool
     */
    private $onlyBusinessTimeOpen;

    /**
     * 时间类型：1 全天，2 每天重复， 3 每周重复
     * @var int
     */
    private $timeRangeType;

    /**
     * 网点营业时间
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