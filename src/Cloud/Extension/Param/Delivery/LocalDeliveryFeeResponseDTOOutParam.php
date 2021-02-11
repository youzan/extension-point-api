<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryFeeResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-09-19 18:12:19.0
 */
class LocalDeliveryFeeResponseDTOOutParam implements \JsonSerializable {

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
     * @var LocalDeliveryFeeResponseDTO
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
     * @return LocalDeliveryFeeResponseDTO
     */
    public function getData(): LocalDeliveryFeeResponseDTO
    {
        return $this->data;
    }

    /**
     * @param LocalDeliveryFeeResponseDTO $data
     */
    public function setData(LocalDeliveryFeeResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}