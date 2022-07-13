<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * {}
 * @author Baymax
 * @create Thu Jan 13 20:33:20 CST 2022
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
     * @var string
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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}