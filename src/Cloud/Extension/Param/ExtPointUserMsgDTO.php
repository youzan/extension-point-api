<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 买家信息
 * @author Baymax
 * @create 2019-03-27 11:42:10.0
 */
class ExtPointUserMsgDTO implements \JsonSerializable {

    /**
     * 买家ID
     * @var int
     */
    private $buyerId;

    /**
     * 粉丝类型
     * @var int
     */
    private $fansType;

    /**
     * 粉丝标识
     * @var int
     */
    private $fansId;

    /**
     * 客户ip
     * @var string
     */
    private $clientIp;

    /**
     * 外部用户id
     * @var string
     */
    private $outUserId;

    /**
     * 手机号
     * @var string
     */
    private $phoneNo;

    /**
     *  用户标识
     * @var string
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return int
     */
    public function getFansType(): int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return int
     */
    public function getFansId(): int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getOutUserId(): string
    {
        return $this->outUserId;
    }

    /**
     * @param string $outUserId
     */
    public function setOutUserId(string $outUserId): void
    {
        $this->outUserId = $outUserId;
    }

    /**
     * @return string
     */
    public function getPhoneNo(): string
    {
        return $this->phoneNo;
    }

    /**
     * @param string $phoneNo
     */
    public function setPhoneNo(string $phoneNo): void
    {
        $this->phoneNo = $phoneNo;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}