<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeResponseList;

/**
 * 
 * @author Baymax
 * @create 2019-10-11 15:15:59.0
 */
class FulfillTimeListResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $fulfillTimeResponseList;



    /**
     * @return array
     */
    public function getFulfillTimeResponseList(): array
    {
        return $this->fulfillTimeResponseList;
    }

    /**
     * @param array $fulfillTimeResponseList
     */
    public function setFulfillTimeResponseList(array $fulfillTimeResponseList): void
    {
        $this->fulfillTimeResponseList = $fulfillTimeResponseList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}