<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use DateTime;
use StdClass;

/**
 * 可用优惠券列表
 * @author Baymax
 * @create 2019-07-23 20:30:39.0
 */
class ThirdpartyVoucherDTO implements \JsonSerializable {

    /**
     * 优惠券id
     * @var int
     */
    private $id;

    /**
     * 优惠活动id
     * @var int
     */
    private $activityId;

    /**
     * 券面额  1. 为折扣优惠时，技能取1-99 2. 为满减券时 小于10W * 100 分
     * @var int
     */
    private $value;

    /**
     * 货币类型 CNY - 人民币(目前仅支持) USD - 美金  HKD - 港币
     * @var string
     */
    private $currency;

    /**
     * 1 - 代金券 2 - 折扣券
     * @var int
     */
    private $preferentialMode;

    /**
     * 优惠券归属用户id yzOpenId
     * @var string
     */
    private $ownerId;

    /**
     * 1 - 可用 2 - 不可用
     * @var int
     */
    private $status;

    /**
     * 凭证有效期开始时间
     * @var DateTime
     */
    private $validStartTime;

    /**
     * 凭证有效期结束时间
     * @var DateTime
     */
    private $validEndTime;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getActivityId(): int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    /**
     * @param string $ownerId
     */
    public function setOwnerId(string $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getValidStartTime(): DateTime
    {
        return $this->validStartTime;
    }

    /**
     * @param DateTime $validStartTime
     */
    public function setValidStartTime(DateTime $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return DateTime
     */
    public function getValidEndTime(): DateTime
    {
        return $this->validEndTime;
    }

    /**
     * @param DateTime $validEndTime
     */
    public function setValidEndTime(DateTime $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}