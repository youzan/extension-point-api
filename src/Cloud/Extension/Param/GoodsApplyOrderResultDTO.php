<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-07-21 18:21:24.0
 */
class GoodsApplyOrderResultDTO implements \JsonSerializable {

    /**
     * 是否成功
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}