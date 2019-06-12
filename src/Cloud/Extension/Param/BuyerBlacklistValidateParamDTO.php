<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-10-08 10:51:46.0
 */
class BuyerBlacklistValidateParamDTO implements \JsonSerializable {

    /**
     * 电话号码
     * @var string
     */
    private $phoneNum;

    /**
     * 买家标识
     * @var string
     */
    private $userId;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getPhoneNum(): string
    {
        return $this->phoneNum;
    }

    /**
     * @param string $phoneNum
     */
    public function setPhoneNum(string $phoneNum): void
    {
        $this->phoneNum = $phoneNum;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}