<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\PreHandlePerformanceAttributionResponse;

/**
 * 导购业绩归因预处理信息结果返回类
 * @author Baymax
 * @create Mon Jul 10 16:38:33 CST 2023
 */
class PreHandlePerformanceAttributionResponseOutParam implements \JsonSerializable {

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
     * @var PreHandlePerformanceAttributionResponse
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
     * @return PreHandlePerformanceAttributionResponse
     */
    public function getData(): ?PreHandlePerformanceAttributionResponse
    {
        return $this->data;
    }

    /**
     * @param PreHandlePerformanceAttributionResponse $data
     */
    public function setData(?PreHandlePerformanceAttributionResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}