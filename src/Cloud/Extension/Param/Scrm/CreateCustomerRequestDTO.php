<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerIdentifyDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerProfileCreateDTO;

/**
 *  
 * @author Baymax
 * @create Tue Mar 14 10:16:21 CST 2023
 */
class CreateCustomerRequestDTO implements \JsonSerializable {

    /**
     *  
     * @var CustomerIdentifyDTO
     */
    private $customerIdentifyDTO;

    /**
     *  
     * @var CustomerProfileCreateDTO
     */
    private $customerProfileCreateDTO;



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
     * @return CustomerProfileCreateDTO
     */
    public function getCustomerProfileCreateDTO(): ?CustomerProfileCreateDTO
    {
        return $this->customerProfileCreateDTO;
    }

    /**
     * @param CustomerProfileCreateDTO $customerProfileCreateDTO
     */
    public function setCustomerProfileCreateDTO(?CustomerProfileCreateDTO $customerProfileCreateDTO): void
    {
        $this->customerProfileCreateDTO = $customerProfileCreateDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}