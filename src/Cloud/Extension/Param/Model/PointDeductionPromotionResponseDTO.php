<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class PointDeductionPromotionResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $pointDeductionStatus;

    /**
     * 
     * @var int
     */
    private $costPoints;

    /**
     * 
     * @var int
     */
    private $decrease;

    /**
     * 
     * @var int
     */
    private $remainPoints;

    /**
     * 
     * @var int
     */
    private $rate;

    /**
     * 
     * @var stdClass
     */
    private $extraInfo;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getPointDeductionStatus(): int
    {
        return $this->pointDeductionStatus;
    }

    /**
     * @param int $pointDeductionStatus
     */
    public function setPointDeductionStatus(int $pointDeductionStatus): void
    {
        $this->pointDeductionStatus = $pointDeductionStatus;
    }

    /**
     * @return int
     */
    public function getCostPoints(): int
    {
        return $this->costPoints;
    }

    /**
     * @param int $costPoints
     */
    public function setCostPoints(int $costPoints): void
    {
        $this->costPoints = $costPoints;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return int
     */
    public function getRemainPoints(): int
    {
        return $this->remainPoints;
    }

    /**
     * @param int $remainPoints
     */
    public function setRemainPoints(int $remainPoints): void
    {
        $this->remainPoints = $remainPoints;
    }

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}