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
     * @var array
     */
    private $success;



    /**
     * @return array
     */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /**
     * @param array $success
     */
    public function setSuccess(array $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}