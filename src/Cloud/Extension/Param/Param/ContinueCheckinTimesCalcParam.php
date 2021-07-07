<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * {}
 * @author Baymax
 * @create 2021-06-29 00:52:59.0
 */
class ContinueCheckinTimesCalcParam implements \JsonSerializable {

    /**
     * 自定义连签次数计算规则
     * @var string
     */
    private $externalCycleRule;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 用户openId
     * @var int
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getExternalCycleRule(): ?string
    {
        return $this->externalCycleRule;
    }

    /**
     * @param string $externalCycleRule
     */
    public function setExternalCycleRule(?string $externalCycleRule): void
    {
        $this->externalCycleRule = $externalCycleRule;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getYzOpenId(): ?int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(?int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}