<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Wed Dec 10 15:02:58 CST 2025
 */
class ThirdpartyVoucherbDTO implements \JsonSerializable {

    /**
     * 三方券Id
     * @var int
     */
    private $id;

    /**
     * 外部活动Id
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
     * @var string
     */
    private $yzOpenId;

    /**
     * 凭证状态： 1.已领取未使用 2.已使用 3.未使用已过期
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
     * 外部生成的核销码，不能以ZAN、YZAN开头，否则会导致业务异常，核销码数量必须与入参generateNum保持一致，否则会抛出业务异常
     * @var string
     */
    private $verifyCode;

    /**
     *  
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): ?int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(?int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
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

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getValidStartTime(): ?int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(?int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): ?int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(?int $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}