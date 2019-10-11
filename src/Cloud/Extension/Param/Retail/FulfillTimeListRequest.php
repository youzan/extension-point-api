<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeRequestList;

/**
 * 
 * @author Baymax
 * @create 2019-10-11 15:15:59.0
 */
class FulfillTimeListRequest implements \JsonSerializable {

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