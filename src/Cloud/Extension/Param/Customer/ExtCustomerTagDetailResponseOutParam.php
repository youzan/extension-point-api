<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;

use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerTagDetailResponse;

/**
 * 结果数据返回类
 * @author Baymax
 * @create Thu Aug 24 18:49:00 CST 2023
 */
class ExtCustomerTagDetailResponseOutParam implements \JsonSerializable {

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
     * @var ExtCustomerTagDetailResponse
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
     * @return ExtCustomerTagDetailResponse
     */
    public function getData(): ?ExtCustomerTagDetailResponse
    {
        return $this->data;
    }

    /**
     * @param ExtCustomerTagDetailResponse $data
     */
    public function setData(?ExtCustomerTagDetailResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}