<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ValueCardActivateResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-03-24 10:56:31.0
 */
class ValueCardActivateResponseOutParam implements \JsonSerializable {

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
     * @var ValueCardActivateResponse
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
     * @return ValueCardActivateResponse
     */
    public function getData(): ?ValueCardActivateResponse
    {
        return $this->data;
    }

    /**
     * @param ValueCardActivateResponse $data
     */
    public function setData(?ValueCardActivateResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}