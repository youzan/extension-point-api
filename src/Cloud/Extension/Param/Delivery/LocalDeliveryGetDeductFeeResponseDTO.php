<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:22:52.0
 */
class LocalDeliveryGetDeductFeeResponseDTO implements \JsonSerializable {

    /**
     * 违约金，单位为分
     * @var int
     */
    private $claimant;



    /**
     * @return int
     */
    public function getClaimant(): ?int
    {
        return $this->claimant;
    }

    /**
     * @param int $claimant
     */
    public function setClaimant(?int $claimant): void
    {
        $this->claimant = $claimant;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}