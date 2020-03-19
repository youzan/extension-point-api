<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * 
 * @author Baymax
 * @create 2020-03-18 14:45:32.0
 */
class RequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var string
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getKdtId(): string
    {
        return $this->kdtId;
    }

    /**
     * @param string $kdtId
     */
    public function setKdtId(string $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}