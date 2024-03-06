<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerIdentifyDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\MemberProfileModifyDTO;

/**
 *  
 * @author Baymax
 * @create Tue Mar 14 10:16:17 CST 2023
 */
class ModifyMemberRequestDTO implements \JsonSerializable {

    /**
     * 客户标识
     * @var CustomerIdentifyDTO
     */
    private $customerIdentifyDTO;

    /**
     * 更新会员所需的资料
     * @var MemberProfileModifyDTO
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
     * @return MemberProfileModifyDTO
     */
    public function getMemberProfileModifyDTO(): ?MemberProfileModifyDTO
    {
        return $this->memberProfileModifyDTO;
    }

    /**
     * @param MemberProfileModifyDTO $memberProfileModifyDTO
     */
    public function setMemberProfileModifyDTO(?MemberProfileModifyDTO $memberProfileModifyDTO): void
    {
        $this->memberProfileModifyDTO = $memberProfileModifyDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}