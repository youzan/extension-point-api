<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryGetDeductFeeResponseDTO;

/**
 *  返回类
 * @author Baymax
 * @create Tue Jan 18 21:01:00 CST 2022
 */
class LocalDeliveryGetDeductFeeResponseDTOOutParam implements \JsonSerializable {

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
     * @var LocalDeliveryGetDeductFeeResponseDTO
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
     * @return LocalDeliveryGetDeductFeeResponseDTO
     */
    public function getData(): ?LocalDeliveryGetDeductFeeResponseDTO
    {
        return $this->data;
    }

    /**
     * @param LocalDeliveryGetDeductFeeResponseDTO $data
     */
    public function setData(?LocalDeliveryGetDeductFeeResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}