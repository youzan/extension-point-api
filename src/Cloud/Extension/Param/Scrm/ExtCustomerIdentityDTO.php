<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 用户识别信息
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
 */
class ExtCustomerIdentityDTO implements \JsonSerializable {

    /**
     * 帐号ID
     * @var string
     */
    private $accountId;

    /**
     * 帐号类型，目前有以下几种类型，WxOpenId：微信openId，WxUnionId：微信unionId，Mobile：手机号，YouZanAccount：有赞帐号
     * @var string
     */
    private $accountType;

    /**
     * 商户店铺ID
     * @var string
     */
    private $kdtId;



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

    /**
     * @return string
     */
    public function getKdtId(): string
    {
        return $this->kdtId;
    }

    /**
     * @param string $kdtId
     */
    public function setKdtId(string $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}