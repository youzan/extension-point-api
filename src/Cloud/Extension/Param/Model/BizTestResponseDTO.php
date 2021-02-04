<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Xxx\XXXDTO;

/**
 * 
 * @author Baymax
 * @create Thu Jan 16 19:48:24 CST 2020
 */
class BizTestResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var bool
     */
    private $success;

    /**
     * 
     * @var array
     */
    private $message;

    /**
     * 
     * @var array
     */
    private $errorData;



    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return array
     */
    public function getMessage(): ?array
    {
        return $this->message;
    }

    /**
     * @param array $message
     */
    public function setMessage(?array $message): void
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getErrorData(): ?array
    {
        return $this->errorData;
    }

    /**
     * @param array $errorData
     */
    public function setErrorData(?array $errorData): void
    {
        $this->errorData = $errorData;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}