<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 
 * @author Baymax
 * @create 2019-09-06 11:36:23.0
 */
class TestOneRes implements \JsonSerializable {

    /**
     * 
     * @var bool
     */
    private $success;

    /**
     * 
     * @var string
     */
    private $message;



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
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}