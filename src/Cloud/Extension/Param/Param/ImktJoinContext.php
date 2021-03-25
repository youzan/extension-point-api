<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 参与流程上下文信息
 * @author Baymax
 * @create 2021-03-15 14:39:48.0
 */
class ImktJoinContext implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $shopId;

    /**
     * 活动别名
     * @var string
     */
    private $alias;

    /**
     * 凭证别名
     * @var string
     */
    private $joinVoucherAlias;

    /**
     * 用户id
     * @var int
     */
    private $userId;

    /**
     * 页面来源 1-微信小程序 2-H5 3-支付宝小程序 4-qq小程序
     * @var int
     */
    private $sourceType;



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
     * @return string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getJoinVoucherAlias(): ?string
    {
        return $this->joinVoucherAlias;
    }

    /**
     * @param string $joinVoucherAlias
     */
    public function setJoinVoucherAlias(?string $joinVoucherAlias): void
    {
        $this->joinVoucherAlias = $joinVoucherAlias;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getSourceType(): ?int
    {
        return $this->sourceType;
    }

    /**
     * @param int $sourceType
     */
    public function setSourceType(?int $sourceType): void
    {
        $this->sourceType = $sourceType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}