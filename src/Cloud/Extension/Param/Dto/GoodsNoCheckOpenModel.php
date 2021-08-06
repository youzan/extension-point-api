<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-08-06 11:24:17.0
 */
class GoodsNoCheckOpenModel implements \JsonSerializable {

    /**
     * 校验是否通过
     * @var bool
     */
    private $IsPassed;



    /**
     * @return bool
     */
    public function getIsPassed(): ?bool
    {
        return $this->IsPassed;
    }

    /**
     * @param bool $IsPassed
     */
    public function setIsPassed(?bool $IsPassed): void
    {
        $this->IsPassed = $IsPassed;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}