<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 帐号信息
 * @author Baymax
 * @create 2018-09-30 14:22:43.0
 */
class ExtCustomerInfoDTO implements \JsonSerializable {

    /**
     * 帐号类型，目前有以下几种类型，WxOpenId：微信openId，WxUnionId：微信unionId，Mobile：手机号，YouZanAccount：有赞帐号
     * @var string
     */
    private $accountId;

    /**
     * 帐号id
     * @var string
     */
    private $accountType;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}