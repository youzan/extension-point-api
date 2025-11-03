<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\InteractiveSendPrizeCheckDTO;

/**
 * 响应结果返回类
 * @author Baymax
 * @create Mon Apr 14 15:40:54 CST 2025
 */
class InteractiveSendPrizeCheckDTOOutParam implements \JsonSerializable {

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
     * @var InteractiveSendPrizeCheckDTO
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
     * @return InteractiveSendPrizeCheckDTO
     */
    public function getData(): ?InteractiveSendPrizeCheckDTO
    {
        return $this->data;
    }

    /**
     * @param InteractiveSendPrizeCheckDTO $data
     */
    public function setData(?InteractiveSendPrizeCheckDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}