<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;

use Com\Youzan\Cloud\Extension\Param\Medicine\PrescriptionInfoQueryResponseDTO;

/**
 * 处方信息返回类
 * @author Baymax
 * @create Mon Mar 14 15:58:14 CST 2022
 */
class PrescriptionInfoQueryResponseDTOOutParam implements \JsonSerializable {

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
     * @var PrescriptionInfoQueryResponseDTO
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
     * @return PrescriptionInfoQueryResponseDTO
     */
    public function getData(): ?PrescriptionInfoQueryResponseDTO
    {
        return $this->data;
    }

    /**
     * @param PrescriptionInfoQueryResponseDTO $data
     */
    public function setData(?PrescriptionInfoQueryResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}