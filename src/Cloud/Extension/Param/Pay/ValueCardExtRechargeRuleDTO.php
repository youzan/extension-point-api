<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\GiftPackInfoExtDTO;

/**
 * 储值信息
 * @author Baymax
 * @create Mon Mar 14 17:57:37 CST 2022
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