<?php

namespace Com\Youzan\Cloud\Extension\Param\Cloud;

use Com\Youzan\Cloud\Extension\Param\Cloud\DeliveryToWechatProcessResponse;

/**
 * 响应体返回类
 * @author Baymax
 * @create Thu Jan 13 20:45:03 CST 2022
 */
class DeliveryToWechatProcessResponseOutParam implements \JsonSerializable {

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
     * @var DeliveryToWechatProcessResponse
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
     * @return DeliveryToWechatProcessResponse
     */
    public function getData(): ?DeliveryToWechatProcessResponse
    {
        return $this->data;
    }

    /**
     * @param DeliveryToWechatProcessResponse $data
     */
    public function setData(?DeliveryToWechatProcessResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}