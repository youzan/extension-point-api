<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 14:39:10.0
 */
class ExtLevelRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}