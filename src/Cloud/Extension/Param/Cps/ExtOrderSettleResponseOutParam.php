<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderSettleResponse;

/**
 * data返回类
 * @author Baymax
 * @create Thu Oct 19 20:18:50 CST 2023
 */
class ExtOrderSettleResponseOutParam implements \JsonSerializable {

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
     * @var ExtOrderSettleResponse
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
     * @return ExtOrderSettleResponse
     */
    public function getData(): ?ExtOrderSettleResponse
    {
        return $this->data;
    }

    /**
     * @param ExtOrderSettleResponse $data
     */
    public function setData(?ExtOrderSettleResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}