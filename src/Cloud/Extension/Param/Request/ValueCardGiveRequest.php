<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:29:12.0
 */
class ValueCardGiveRequest implements \JsonSerializable {

    /**
     * 赠送人有赞开放ID
     * @var int
     */
    private $buyerId;

    /**
     * 待赠送卡号
     * @var string
     */
    private $cardNo;

    /**
     * 赠送语（不可超过115位）
     * @var string
     */
    private $giftMessage;

    /**
     * 署名（不可超过15位）
     * @var string
     */
    private $senderSign;



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

    /**
     * @return string
     */
    public function getGiftMessage(): string
    {
        return $this->giftMessage;
    }

    /**
     * @param string $giftMessage
     */
    public function setGiftMessage(string $giftMessage): void
    {
        $this->giftMessage = $giftMessage;
    }

    /**
     * @return string
     */
    public function getSenderSign(): string
    {
        return $this->senderSign;
    }

    /**
     * @param string $senderSign
     */
    public function setSenderSign(string $senderSign): void
    {
        $this->senderSign = $senderSign;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}