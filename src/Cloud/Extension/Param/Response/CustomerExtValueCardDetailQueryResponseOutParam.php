<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\CustomerExtValueCardDetailQueryResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-03-24 11:28:49.0
 */
class CustomerExtValueCardDetailQueryResponseOutParam implements \JsonSerializable {

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
     * @var CustomerExtValueCardDetailQueryResponse
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
     * @return CustomerExtValueCardDetailQueryResponse
     */
    public function getData(): CustomerExtValueCardDetailQueryResponse
    {
        return $this->data;
    }

    /**
     * @param CustomerExtValueCardDetailQueryResponse $data
     */
    public function setData(CustomerExtValueCardDetailQueryResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}