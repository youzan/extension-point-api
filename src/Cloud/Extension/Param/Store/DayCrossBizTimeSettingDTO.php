<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\DayCrossTimeSectionDTO;

/**
 * 营业时间信息
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class DayCrossBizTimeSettingDTO implements \JsonSerializable {

    /**
     * 只允许营业时间下单，只有为true时，自定义营业时间才生效
     * @var bool
     */
    private $onlyBusinessTimeOpen;

    /**
     * 自定义营业时间段信息
     * @var array
     */
    private $openingTimeSections;

    /**
     * 营业类型，1: 营业中，2: 休息
     * @var int
     */
    private $businessType;

    /**
     * 营业的时段类型，1: 全天、2:每天重复、3:每周重复，备注：2、3为自定义营业时间段类型
     * @var int
     */
    private $timeRangeType;



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

    /**
     * @return int
     */
    public function getBusinessType(): ?int
    {
        return $this->businessType;
    }

    /**
     * @param int $businessType
     */
    public function setBusinessType(?int $businessType): void
    {
        $this->businessType = $businessType;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}