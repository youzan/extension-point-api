<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;



/**
 * 自定义营业，具体时间段范围（单位小时分钟），支持多段范围
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class TimeSectionDTO implements \JsonSerializable {

    /**
     * 开始时间点
     * @var string
     */
    private $openTime;

    /**
     * 结束时间点
     * @var string
     */
    private $closeTime;



    /**
     * @return string
     */
    public function getOpenTime(): ?string
    {
        return $this->openTime;
    }

    /**
     * @param string $openTime
     */
    public function setOpenTime(?string $openTime): void
    {
        $this->openTime = $openTime;
    }

    /**
     * @return string
     */
    public function getCloseTime(): ?string
    {
        return $this->closeTime;
    }

    /**
     * @param string $closeTime
     */
    public function setCloseTime(?string $closeTime): void
    {
        $this->closeTime = $closeTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}