<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回数据
 * @author Baymax
 * @create Tue Dec 28 20:39:24 CST 2021
 */
class DataDTO implements \JsonSerializable {

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