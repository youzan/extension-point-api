<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 
 * @author Baymax
 * @create 2019-07-30 13:59:22.0
 */
class TestRetailResponseParam implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $msg;

    /**
     * 
     * @var bool
     */
    private $success;

    /**
     * 
     * @var string
     */
    private $code;



    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): void
    {
        $this->msg = $msg;
    }

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

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}