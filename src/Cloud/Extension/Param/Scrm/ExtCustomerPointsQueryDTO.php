<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-11 17:21:06.0
 */
class ExtCustomerPointsQueryDTO implements \JsonSerializable {

    /**
     * 
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;



    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}