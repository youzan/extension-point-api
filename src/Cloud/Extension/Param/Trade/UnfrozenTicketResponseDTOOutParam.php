<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\UnfrozenTicketResponseDTO;

/**
 *  返回类
 * @author Baymax
 * @create Thu Jan 13 22:27:43 CST 2022
 */
class UnfrozenTicketResponseDTOOutParam implements \JsonSerializable {

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
     * @var UnfrozenTicketResponseDTO
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
     * @return UnfrozenTicketResponseDTO
     */
    public function getData(): ?UnfrozenTicketResponseDTO
    {
        return $this->data;
    }

    /**
     * @param UnfrozenTicketResponseDTO $data
     */
    public function setData(?UnfrozenTicketResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}