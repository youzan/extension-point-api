<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\VoucherVerifyExtPointResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-07-23 20:47:01.0
 */
class VoucherVerifyExtPointResponseDTOOutParam implements \JsonSerializable {

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
     * @var VoucherVerifyExtPointResponseDTO
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
     * @return VoucherVerifyExtPointResponseDTO
     */
    public function getData(): ?VoucherVerifyExtPointResponseDTO
    {
        return $this->data;
    }

    /**
     * @param VoucherVerifyExtPointResponseDTO $data
     */
    public function setData(?VoucherVerifyExtPointResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}