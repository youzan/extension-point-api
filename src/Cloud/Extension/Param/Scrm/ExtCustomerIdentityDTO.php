<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 用户识别信息
 * @author Baymax
 * @create Fri Oct 12 14:13:44 CST 2018
 */
class ExtCustomerIdentityDTO implements \JsonSerializable {

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
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}