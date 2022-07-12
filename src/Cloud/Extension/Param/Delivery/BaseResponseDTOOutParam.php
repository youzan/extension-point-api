<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\BaseResponseDTO;

/**
 *  data必须返回值，不可以为空，失败时，success返回false返回类
 * @author Baymax
 * @create Mon Feb 28 20:12:39 CST 2022
 */
class BaseResponseDTOOutParam implements \JsonSerializable {

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
     * @var BaseResponseDTO
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
     * @return BaseResponseDTO
     */
    public function getData(): ?BaseResponseDTO
    {
        return $this->data;
    }

    /**
     * @param BaseResponseDTO $data
     */
    public function setData(?BaseResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}