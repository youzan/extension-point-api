<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelDTO;

/**
 * 响应参数
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
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
    public function getExtCustomerLevelDTOList(): array
    {
        return $this->extCustomerLevelDTOList;
    }

    /**
     * @param array $extCustomerLevelDTOList
     */
    public function setExtCustomerLevelDTOList(array $extCustomerLevelDTOList): void
    {
        $this->extCustomerLevelDTOList = $extCustomerLevelDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}