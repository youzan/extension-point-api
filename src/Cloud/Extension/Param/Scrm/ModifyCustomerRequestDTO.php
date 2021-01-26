<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerIdentifyDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerProfileModifyDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-10 13:15:37.0
 */
class ModifyCustomerRequestDTO implements \JsonSerializable {

    /**
     * 客户标识
     * @var CustomerIdentifyDTO
     */
    private $customerIdentifyDTO;

    /**
     * 
     * @var CustomerProfileModifyDTO
     */
    private $memberProfileModifyDTO;



    /**
     * @return CustomerIdentifyDTO
     */
    public function getCustomerIdentifyDTO(): ?CustomerIdentifyDTO
    {
        return $this->customerIdentifyDTO;
    }

    /**
     * @param CustomerIdentifyDTO $customerIdentifyDTO
     */
    public function setCustomerIdentifyDTO(?CustomerIdentifyDTO $customerIdentifyDTO): void
    {
        $this->customerIdentifyDTO = $customerIdentifyDTO;
    }

    /**
     * @return CustomerProfileModifyDTO
     */
    public function getMemberProfileModifyDTO(): ?CustomerProfileModifyDTO
    {
        return $this->memberProfileModifyDTO;
    }

    /**
     * @param CustomerProfileModifyDTO $memberProfileModifyDTO
     */
    public function setMemberProfileModifyDTO(?CustomerProfileModifyDTO $memberProfileModifyDTO): void
    {
        $this->memberProfileModifyDTO = $memberProfileModifyDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}