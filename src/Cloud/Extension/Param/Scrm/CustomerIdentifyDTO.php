<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 客户标识
 * @author Baymax
 * @create Tue Mar 14 10:16:16 CST 2023
 */
class CustomerIdentifyDTO implements \JsonSerializable {

    /**
     * 帐号类型，目前有以下几种类型，WxOpenId：微信openId，WxUnionId：微信unionId，Mobile：手机号，YouZanAccount：有赞帐号
     * @var string
     */
    private $accountType;

    /**
     * 帐号ID
     * @var string
     */
    private $accountId;

    /**
     * 连锁场景：总部kdtId；单店场景：店铺kdtId；
     * @var int
     */
    private $kdtId;

    /**
     * yzOpenId
     * @var string
     */
    private $yzOpenId;

    /**
     * 触发当前请求的店铺id
     * @var int
     */
    private $nodeKdtId;

    /**
     * 手机号
     * @var string
     */
    private $mobile;



    /**
     * @return string
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(?string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
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

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}