<?php

namespace Com\Youzan\Cloud\Extension\Param\Dc;

use Com\Youzan\Cloud\Extension\Param\Dc\DeliveryParamValidatorResponse;

/**
 * 发货校验结果对象返回类
 * @author Baymax
 * @create Sat Jul 30 23:31:30 CST 2022
 */
class DeliveryParamValidatorResponseOutParam implements \JsonSerializable {

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
     * @var DeliveryParamValidatorResponse
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
     * @return DeliveryParamValidatorResponse
     */
    public function getData(): ?DeliveryParamValidatorResponse
    {
        return $this->data;
    }

    /**
     * @param DeliveryParamValidatorResponse $data
     */
    public function setData(?DeliveryParamValidatorResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}