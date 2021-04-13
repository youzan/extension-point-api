<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;

use Com\Youzan\Cloud\Extension\Param\Medicine\DiagnoseDiseaseQueryResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2021-04-11 16:24:33.0
 */
class DiagnoseDiseaseQueryResponseDTOOutParam implements \JsonSerializable {

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
     * @var DiagnoseDiseaseQueryResponseDTO
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
     * @return DiagnoseDiseaseQueryResponseDTO
     */
    public function getData(): ?DiagnoseDiseaseQueryResponseDTO
    {
        return $this->data;
    }

    /**
     * @param DiagnoseDiseaseQueryResponseDTO $data
     */
    public function setData(?DiagnoseDiseaseQueryResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}