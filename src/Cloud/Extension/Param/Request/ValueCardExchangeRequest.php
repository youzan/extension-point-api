<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Mon May 22 15:27:33 CST 2023
 */
class ValueCardExchangeRequest implements \JsonSerializable {

    /**
     * 有赞用户开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 序列号，卡密兑换时必填，扫码兑换时为空
     * @var string
     */
    private $serialNum;

    /**
     * 兑换码，卡密兑换时必填，扫码兑换时为空
     * @var string
     */
    private $checkCode;

    /**
     * 卡号随机码，扫码兑换时必填，卡密兑换时为空
     * @var string
     */
    private $cardRandom;

    /**
     * 兑换方式：0-卡密兑换，1-扫码兑换
     * @var int
     */
    private $exchangeType;

    /**
     * 操作人用户id
     * @var string
     */
    private $operatorUid;

    /**
     * 兑换时是否要同步进行激活
     * @var bool
     */
    private $needActive;

    /**
     * 当前店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



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
     * @return string
     */
    public function getSerialNum(): ?string
    {
        return $this->serialNum;
    }

    /**
     * @param string $serialNum
     */
    public function setSerialNum(?string $serialNum): void
    {
        $this->serialNum = $serialNum;
    }

    /**
     * @return string
     */
    public function getCheckCode(): ?string
    {
        return $this->checkCode;
    }

    /**
     * @param string $checkCode
     */
    public function setCheckCode(?string $checkCode): void
    {
        $this->checkCode = $checkCode;
    }

    /**
     * @return string
     */
    public function getCardRandom(): ?string
    {
        return $this->cardRandom;
    }

    /**
     * @param string $cardRandom
     */
    public function setCardRandom(?string $cardRandom): void
    {
        $this->cardRandom = $cardRandom;
    }

    /**
     * @return int
     */
    public function getExchangeType(): ?int
    {
        return $this->exchangeType;
    }

    /**
     * @param int $exchangeType
     */
    public function setExchangeType(?int $exchangeType): void
    {
        $this->exchangeType = $exchangeType;
    }

    /**
     * @return string
     */
    public function getOperatorUid(): ?string
    {
        return $this->operatorUid;
    }

    /**
     * @param string $operatorUid
     */
    public function setOperatorUid(?string $operatorUid): void
    {
        $this->operatorUid = $operatorUid;
    }

    /**
     * @return bool
     */
    public function getNeedActive(): ?bool
    {
        return $this->needActive;
    }

    /**
     * @param bool $needActive
     */
    public function setNeedActive(?bool $needActive): void
    {
        $this->needActive = $needActive;
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
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}