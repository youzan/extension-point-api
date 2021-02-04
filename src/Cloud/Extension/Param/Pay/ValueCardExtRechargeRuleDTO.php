<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\GiftPackInfoExtDTO;

/**
 * 
 * @author Baymax
 * @create 2019-11-22 15:09:19.0
 */
class ValueCardExtRechargeRuleDTO implements \JsonSerializable {

    /**
     * 金额，单位（分）
     * @var int
     */
    private $amount;

    /**
     * 礼包信息
     * @var array
     */
    private $giftPacks;



    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return array
     */
    public function getGiftPacks(): ?array
    {
        return $this->giftPacks;
    }

    /**
     * @param array $giftPacks
     */
    public function setGiftPacks(?array $giftPacks): void
    {
        $this->giftPacks = $giftPacks;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}