<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\RespDTO;

/**
 * test实打实大师返回类
 * @author Baymax
 * @create Wed Mar 18 14:45:32 CST 2020
 */
class RespDTOOutParam implements \JsonSerializable {

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
     * @var RespDTO
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
     * @return RespDTO
     */
    public function getData(): ?RespDTO
    {
        return $this->data;
    }

    /**
     * @param RespDTO $data
     */
    public function setData(?RespDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}