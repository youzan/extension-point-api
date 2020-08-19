<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 储值赠送金权益
 * @author Baymax
 * @create Fri Nov 22 12:15:26 CST 2019
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
    public function getBonusAmount(): int
    {
        return $this->bonusAmount;
    }

    /**
     * @param int $bonusAmount
     */
    public function setBonusAmount(int $bonusAmount): void
    {
        $this->bonusAmount = $bonusAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}