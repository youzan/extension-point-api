<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelDTO;

/**
 *  
 * @author Baymax
 * @create Tue Jan 10 11:41:19 CST 2023
 */
class ExtCustomerLevelListDTO implements \JsonSerializable {

    /**
     * 用户等级列表
     * @var array
     */
    private $extCustomerLevelDTOList;



    /**
     * @return array
     */
    public function getExtCustomerLevelDTOList(): ?array
    {
        return $this->extCustomerLevelDTOList;
    }

    /**
     * @param array $extCustomerLevelDTOList
     */
    public function setExtCustomerLevelDTOList(?array $extCustomerLevelDTOList): void
    {
        $this->extCustomerLevelDTOList = $extCustomerLevelDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}