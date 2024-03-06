<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtAttributionResponse;

/**
 * 返参返回类
 * @author Baymax
 * @create Thu May 18 19:21:53 CST 2023
 */
class ExtAttributionResponseOutParam implements \JsonSerializable {

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
     * @var ExtAttributionResponse
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
     * @return ExtAttributionResponse
     */
    public function getData(): ?ExtAttributionResponse
    {
        return $this->data;
    }

    /**
     * @param ExtAttributionResponse $data
     */
    public function setData(?ExtAttributionResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}