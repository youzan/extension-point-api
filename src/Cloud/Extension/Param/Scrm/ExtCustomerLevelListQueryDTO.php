<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
 */
class ExtCustomerLevelListQueryDTO implements \JsonSerializable {

    /**
     * 用户识别信息
     * @var ExtCustomerIdentityDTO
     */
    private $extCustomerIdentityDTO;



    /**
     * @return ExtCustomerIdentityDTO
     */
    public function getExtCustomerIdentityDTO(): ExtCustomerIdentityDTO
    {
        return $this->extCustomerIdentityDTO;
    }

    /**
     * @param ExtCustomerIdentityDTO $extCustomerIdentityDTO
     */
    public function setExtCustomerIdentityDTO(ExtCustomerIdentityDTO $extCustomerIdentityDTO): void
    {
        $this->extCustomerIdentityDTO = $extCustomerIdentityDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}