<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;

use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountApplyCheckResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2020-10-13 17:48:00.0
 */
class ExtAccountApplyCheckResponseDTOOutParam implements \JsonSerializable {

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
     * @var ExtAccountApplyCheckResponseDTO
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
     * @return ExtAccountApplyCheckResponseDTO
     */
    public function getData(): ?ExtAccountApplyCheckResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtAccountApplyCheckResponseDTO $data
     */
    public function setData(?ExtAccountApplyCheckResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}