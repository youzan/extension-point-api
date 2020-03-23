<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 17658987654
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
     * 有赞OpenId来识别唯一用户信息
     * @var int
     */
    private $yzOpenId;



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
     * @return int
     */
    public function getYzOpenId(): int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}