<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 账户信息
 * @author Baymax
 * @create Fri Feb 11 14:15:14 CST 2022
 */
class ExtCustomerInfoDTO implements \JsonSerializable {

    /**
     * 帐号id
     * @var string
     */
    private $accountId;

    /**
     * 帐号类型，目前有以下几种类型，WxOpenId：微信openId，WxUnionId：微信unionId，Mobile：手机号，YouZanAccount：有赞帐号
     * @var string
     */
    private $accountType;

    /**
     * 有赞OpenId
     * @var string
     */
    private $yzOpenId;



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