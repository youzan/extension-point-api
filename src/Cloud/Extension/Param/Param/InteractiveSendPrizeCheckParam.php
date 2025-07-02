<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Apr 14 15:40:54 CST 2025
 */
class InteractiveSendPrizeCheckParam implements \JsonSerializable {

    /**
     * 店铺id，分店参与则为分店id
     * @var int
     */
    private $shopId;

    /**
     * 互动插件类型 10004--幸运大抽奖
     * @var int
     */
    private $appIdentity;

    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 用户id
     * @var string
     */
    private $openId;

    /**
     * 奖品id
     * @var int
     */
    private $awardFetchId;



    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getAppIdentity(): ?int
    {
        return $this->appIdentity;
    }

    /**
     * @param int $appIdentity
     */
    public function setAppIdentity(?int $appIdentity): void
    {
        $this->appIdentity = $appIdentity;
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
     * @return string
     */
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * @param string $openId
     */
    public function setOpenId(?string $openId): void
    {
        $this->openId = $openId;
    }

    /**
     * @return int
     */
    public function getAwardFetchId(): ?int
    {
        return $this->awardFetchId;
    }

    /**
     * @param int $awardFetchId
     */
    public function setAwardFetchId(?int $awardFetchId): void
    {
        $this->awardFetchId = $awardFetchId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}