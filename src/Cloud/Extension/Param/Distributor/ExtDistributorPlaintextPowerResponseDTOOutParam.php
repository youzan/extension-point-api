<?php

namespace Com\Youzan\Cloud\Extension\Param\Distributor;

use Com\Youzan\Cloud\Extension\Param\Distributor\ExtDistributorPlaintextPowerResponseDTO;

/**
 * 相应参数返回类
 * @author Baymax
 * @create Wed Mar 23 15:20:15 CST 2022
 */
class ExtDistributorPlaintextPowerResponseDTOOutParam implements \JsonSerializable {

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
     * @var ExtDistributorPlaintextPowerResponseDTO
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
     * @return ExtDistributorPlaintextPowerResponseDTO
     */
    public function getData(): ?ExtDistributorPlaintextPowerResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtDistributorPlaintextPowerResponseDTO $data
     */
    public function setData(?ExtDistributorPlaintextPowerResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}