<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\RefundAgreeBizValidatorCobuildResponseDTO;

/**
 * 响应参数返回类
 * @author Baymax
 * @create Thu Aug 04 16:37:44 CST 2022
 */
class RefundAgreeBizValidatorCobuildResponseDTOOutParam implements \JsonSerializable {

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
     * @var RefundAgreeBizValidatorCobuildResponseDTO
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
     * @return RefundAgreeBizValidatorCobuildResponseDTO
     */
    public function getData(): ?RefundAgreeBizValidatorCobuildResponseDTO
    {
        return $this->data;
    }

    /**
     * @param RefundAgreeBizValidatorCobuildResponseDTO $data
     */
    public function setData(?RefundAgreeBizValidatorCobuildResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}