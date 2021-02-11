<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\DisableTicketResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-07-23 19:43:59.0
 */
class DisableTicketResponseDTOOutParam implements \JsonSerializable {

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
     * @var DisableTicketResponseDTO
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
     * @return DisableTicketResponseDTO
     */
    public function getData(): DisableTicketResponseDTO
    {
        return $this->data;
    }

    /**
     * @param DisableTicketResponseDTO $data
     */
    public function setData(DisableTicketResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}