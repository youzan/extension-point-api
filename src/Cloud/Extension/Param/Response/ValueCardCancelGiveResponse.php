<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:29:05.0
 */
class ValueCardCancelGiveResponse implements \JsonSerializable {

    /**
     * 取消赠送是否成功
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