<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\OpeningTimeSectionDTO;

/**
 * 营业时间设置，该字段已经交给物流维护
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class OfflineBusinessSettingDTO implements \JsonSerializable {

    /**
     * 营业时间类型 1：一直营业，2：休息
     * @var int
     */
    private $type;

    /**
     * 只允许营业时间下单
     * @var bool
     */
    private $onlyBusinessTimeOpen;

    /**
     * 网点营业时间段
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