<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\CreateAcquireResultDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-07-29 20:50:49.0
 */
class CreateAcquireResultDTOOutParam implements \JsonSerializable {

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
     *
     * @var string
     */
    private $message;

    /**
     *
     * @var CreateAcquireResultDTO
     */
    private $data;

    /**
     * @return bool
     */
    public function isSuccess(): bool
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

    /**
     * @return CreateAcquireResultDTO
     */
    public function getData(): ?CreateAcquireResultDTO
    {
        return $this->data;
    }

    /**
     * @param CreateAcquireResultDTO $data
     */
    public function setData(?CreateAcquireResultDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}