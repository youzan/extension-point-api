<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;
use StdClass;

/**
 * 外部券信息
 * @author Baymax
 * @create 2020-02-12 16:35:41.0
 */
class ThirdpartyVoucheraDTO implements \JsonSerializable {

    /**
     * 凭证id
     * @var int
     */
    private $id;

    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 券面额      - 为折扣优惠方式时，只能取1-99      - 为代金优惠方式时 小于10W * 100 分
     * @var int
     */
    private $value;

    /**
     * 面额      CNY - 人民币(目前仅支持)      USD - 美金      HKD - 港币
     * @var string
     */
    private $currency;

    /**
     * 1 - 代金券      2 - 折扣券
     * @var int
     */
    private $preferentialMode;

    /**
     * 优惠券归属用户id
     * @var int
     */
    private $userId;

    /**
     * 凭证状态      1. 生效 &#x3D; 未使用 and 未过期      2. 已使用      3. 已过期 &#x3D; 未使用 and 已过期      4. 已失效 &#x3D; 已使用 or 已过期      5. 已锁定
     * @var int
     */
    private $status;

    /**
     * 凭证有效期开始时间
     * @var int
     */
    private $validStartTime;

    /**
     * 凭证有效期结束时间
     * @var int
     */
    private $validEndTime;

    /**
     * 
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
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
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
     * @return int
     */
    public function getValidStartTime(): int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(int $validEndTime): void
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