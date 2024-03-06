<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderAttributionDirectlyResponse;

/**
 * 响应参数返回类
 * @author Baymax
 * @create Thu Aug 17 21:27:16 CST 2023
 */
class ExtOrderAttributionDirectlyResponseOutParam implements \JsonSerializable {

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
     * @var ExtOrderAttributionDirectlyResponse
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
     * @return ExtOrderAttributionDirectlyResponse
     */
    public function getData(): ?ExtOrderAttributionDirectlyResponse
    {
        return $this->data;
    }

    /**
     * @param ExtOrderAttributionDirectlyResponse $data
     */
    public function setData(?ExtOrderAttributionDirectlyResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}