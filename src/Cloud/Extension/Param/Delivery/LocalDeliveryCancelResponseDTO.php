<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 23:19:46 CST 2022
 */
class LocalDeliveryCancelResponseDTO implements \JsonSerializable {

    /**
     * 取消违约金，单位为分
     * @var int
     */
    private $deductFee;



    /**
     * @return int
     */
    public function getDeductFee(): ?int
    {
        return $this->deductFee;
    }

    /**
     * @param int $deductFee
     */
    public function setDeductFee(?int $deductFee): void
    {
        $this->deductFee = $deductFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}