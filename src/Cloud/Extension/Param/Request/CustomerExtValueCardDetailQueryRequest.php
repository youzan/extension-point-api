<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:28:49.0
 */
class CustomerExtValueCardDetailQueryRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 卡号（调用方生成，取值自列表查询扩展点返回 cardNo 字段）
     * @var string
     */
    private $cardNo;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}