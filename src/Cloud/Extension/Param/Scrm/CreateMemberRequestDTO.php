<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerIdentifyDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\MemberProfileCreateDTO;

/**
 *  
 * @author Baymax
 * @create Tue Mar 14 10:15:59 CST 2023
 */
class CreateMemberRequestDTO implements \JsonSerializable {

    /**
     *  
     * @var CustomerIdentifyDTO
     */
    private $customerIdentifyDTO;

    /**
     *  
     * @var MemberProfileCreateDTO
     */
    private $memberProfileCreateDTO;



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
     * @return MemberProfileCreateDTO
     */
    public function getMemberProfileCreateDTO(): ?MemberProfileCreateDTO
    {
        return $this->memberProfileCreateDTO;
    }

    /**
     * @param MemberProfileCreateDTO $memberProfileCreateDTO
     */
    public function setMemberProfileCreateDTO(?MemberProfileCreateDTO $memberProfileCreateDTO): void
    {
        $this->memberProfileCreateDTO = $memberProfileCreateDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}