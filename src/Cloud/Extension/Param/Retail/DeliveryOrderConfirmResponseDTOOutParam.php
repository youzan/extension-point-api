<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderConfirmResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-07-25 14:17:34.0
 */
class DeliveryOrderConfirmResponseDTOOutParam implements \JsonSerializable {

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
     * @var DeliveryOrderConfirmResponseDTO
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
     * @return DeliveryOrderConfirmResponseDTO
     */
    public function getData(): ?DeliveryOrderConfirmResponseDTO
    {
        return $this->data;
    }

    /**
     * @param DeliveryOrderConfirmResponseDTO $data
     */
    public function setData(?DeliveryOrderConfirmResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}