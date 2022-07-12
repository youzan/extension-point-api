<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 19:05:13 CST 2022
 */
class ValueCardGiveRequest implements \JsonSerializable {

    /**
     * 赠送人有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 待赠送卡号（调用方生成，取值自卡详情扩展点返回 cardNo 字段）
     * @var string
     */
    private $cardNo;

    /**
     * 赠送语（长度不得大于115）
     * @var string
     */
    private $giftMessage;

    /**
     * 署名（长度不得超过15位）
     * @var string
     */
    private $senderSign;

    /**
     * 店铺ID
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
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getGiftMessage(): ?string
    {
        return $this->giftMessage;
    }

    /**
     * @param string $giftMessage
     */
    public function setGiftMessage(?string $giftMessage): void
    {
        $this->giftMessage = $giftMessage;
    }

    /**
     * @return string
     */
    public function getSenderSign(): ?string
    {
        return $this->senderSign;
    }

    /**
     * @param string $senderSign
     */
    public function setSenderSign(?string $senderSign): void
    {
        $this->senderSign = $senderSign;
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