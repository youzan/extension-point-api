<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 储值赠送金权益
 * @author Baymax
 * @create Mon Mar 14 17:57:37 CST 2022
 */
class BonusAmountRightsDTO implements \JsonSerializable {

    /**
     * 储值赠送金额，单位（分）
     * @var int
     */
    private $bonusAmount;



    /**
     * @return int
     */
    public function getBonusAmount(): ?int
    {
        return $this->bonusAmount;
    }

    /**
     * @param int $bonusAmount
     */
    public function setBonusAmount(?int $bonusAmount): void
    {
        $this->bonusAmount = $bonusAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}