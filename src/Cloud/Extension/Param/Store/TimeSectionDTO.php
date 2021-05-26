<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class TimeSectionDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $openTime;

    /**
     * 
     * @var string
     */
    private $closeTime;

    /**
     * 
     * @var int
     */
    private $dayCross;



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

    /**
     * @return int
     */
    public function getDayCross(): ?int
    {
        return $this->dayCross;
    }

    /**
     * @param int $dayCross
     */
    public function setDayCross(?int $dayCross): void
    {
        $this->dayCross = $dayCross;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}