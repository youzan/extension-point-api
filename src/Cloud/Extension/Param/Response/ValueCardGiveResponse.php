<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:29:12.0
 */
class ValueCardGiveResponse implements \JsonSerializable {

    /**
     * 赠送卡号
     * @var string
     */
    private $cardNo;

    /**
     * 赠送记录ID（调用方赠送记录主键，由调用方生成，最大长度不得超过25）
     * @var string
     */
    private $giveId;



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
    public function getGiveId(): ?string
    {
        return $this->giveId;
    }

    /**
     * @param string $giveId
     */
    public function setGiveId(?string $giveId): void
    {
        $this->giveId = $giveId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}