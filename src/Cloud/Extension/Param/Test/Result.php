<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\PreTestResponseDTO;

/**
 * 
 * @author Baymax
 * @create 2019-09-05 10:09:24.0
 */
class Result implements \JsonSerializable {

    /**
     * 
     * @var PreTestResponseDTO
     */
    private $data;

    /**
     * 
     * @var bool
     */
    private $success;

    /**
     * 
     * @var int
     */
    private $code;

    /**
     * 
     * @var string
     */
    private $message;

    /**
     * 
     * @var string
     */
    private $requestId;



    /**
     * @return PreTestResponseDTO
     */
    public function getData(): ?PreTestResponseDTO
    {
        return $this->data;
    }

    /**
     * @param PreTestResponseDTO $data
     */
    public function setData(?PreTestResponseDTO $data): void
    {
        $this->data = $data;
    }

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
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}