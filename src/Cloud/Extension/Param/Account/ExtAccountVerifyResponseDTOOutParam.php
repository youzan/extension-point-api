<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;

use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountVerifyResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2020-04-16 10:50:54.0
 */
class ExtAccountVerifyResponseDTOOutParam implements \JsonSerializable {

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
     * @var ExtAccountVerifyResponseDTO
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
     * @return ExtAccountVerifyResponseDTO
     */
    public function getData(): ?ExtAccountVerifyResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtAccountVerifyResponseDTO $data
     */
    public function setData(?ExtAccountVerifyResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}