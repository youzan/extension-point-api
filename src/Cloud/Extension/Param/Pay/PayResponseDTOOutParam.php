<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\PayResponseDTO;

/**
 *  响应对象返回类
 * @author Baymax
 * @create Fri Mar 28 10:07:57 CST 2025
 */
class PayResponseDTOOutParam implements \JsonSerializable {

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
     * @var PayResponseDTO
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
     * @return PayResponseDTO
     */
    public function getData(): ?PayResponseDTO
    {
        return $this->data;
    }

    /**
     * @param PayResponseDTO $data
     */
    public function setData(?PayResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}