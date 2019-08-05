<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 请求参数
 * @author Baymax
 * @create 2019-08-05 11:30:18.0
 */
class PointsChangeDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 账号id
     * @var int
     */
    private $yzUid;

    /**
     * 粉丝id
     * @var int
     */
    private $fansId;

    /**
     * 积分变动值
     * @var int
     */
    private $amount;

    /**
     * 积分变更描述
     * @var string
     */
    private $description;

    /**
     * 
     * @var int
     */
    private $eventType;

    /**
     * 积分变更业务标识
     * @var string
     */
    private $bizValue;

    /**
     * 积分变动日志id
     * @var int
     */
    private $pointsLogId;



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
     * @return int
     */
    public function getYzUid(): int
    {
        return $this->yzUid;
    }

    /**
     * @param int $yzUid
     */
    public function setYzUid(int $yzUid): void
    {
        $this->yzUid = $yzUid;
    }

    /**
     * @return int
     */
    public function getFansId(): int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getEventType(): int
    {
        return $this->eventType;
    }

    /**
     * @param int $eventType
     */
    public function setEventType(int $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string
     */
    public function getBizValue(): string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    /**
     * @return int
     */
    public function getPointsLogId(): int
    {
        return $this->pointsLogId;
    }

    /**
     * @param int $pointsLogId
     */
    public function setPointsLogId(int $pointsLogId): void
    {
        $this->pointsLogId = $pointsLogId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}