<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeRequestListDTO;

/**
 * 
 * @author Baymax
 * @create Sat Oct 12 10:30:48 CST 2019
 */
class FulfillTimeListRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $fulfillTimeRequestList;



    /**
     * @return array
     */
    public function getFulfillTimeRequestList(): array
    {
        return $this->fulfillTimeRequestList;
    }

    /**
     * @param array $fulfillTimeRequestList
     */
    public function setFulfillTimeRequestList(array $fulfillTimeRequestList): void
    {
        $this->fulfillTimeRequestList = $fulfillTimeRequestList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}