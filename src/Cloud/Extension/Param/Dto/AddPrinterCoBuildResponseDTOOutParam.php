<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\AddPrinterCoBuildResponseDTO;

/**
 * 返回数据返回类
 * @author Baymax
 * @create Thu Jan 16 17:33:31 CST 2025
 */
class AddPrinterCoBuildResponseDTOOutParam implements \JsonSerializable {

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
     * @var AddPrinterCoBuildResponseDTO
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
     * @return AddPrinterCoBuildResponseDTO
     */
    public function getData(): ?AddPrinterCoBuildResponseDTO
    {
        return $this->data;
    }

    /**
     * @param AddPrinterCoBuildResponseDTO $data
     */
    public function setData(?AddPrinterCoBuildResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}