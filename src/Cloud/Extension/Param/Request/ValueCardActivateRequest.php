<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:31.0
 */
class ValueCardActivateRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $buyerId;

    /**
     * 卡号
     * @var string
     */
    private $cardNo;



    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(string $buyerId): void
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}