<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeRequestListDTO;

/**
 * 
 * @author Baymax
 * @create 2019-10-12 10:30:48.0
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