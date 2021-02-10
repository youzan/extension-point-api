<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\BizTestResponse;

/**
 * 执行结果返回类
 * @author Baymax
 * @create Mon Sep 17 21:46:05 CST 2018
 */
class BizTestResponseOutParam implements \JsonSerializable {

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
     * @var BizTestResponse
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
     * @return BizTestResponse
     */
    public function getData(): ?BizTestResponse
    {
        return $this->data;
    }

    /**
     * @param BizTestResponse $data
     */
    public function setData(?BizTestResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}