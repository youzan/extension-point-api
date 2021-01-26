<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Xxx\XXXDTO;

/**
 * asdsad
 * @author Baymax
 * @create 2020-01-16 19:48:24.0
 */
class BizTestResponseDTO implements \JsonSerializable {

    /**
     * 12
     * @var bool
     */
    private $success;

    /**
     * 433
     * @var array
     */
    private $message;

    /**
     * 2321
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