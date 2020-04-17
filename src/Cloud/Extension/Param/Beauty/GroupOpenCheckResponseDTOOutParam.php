<?php

namespace Com\Youzan\Cloud\Extension\Param\Beauty;

use Com\Youzan\Cloud\Extension\Param\Beauty\GroupOpenCheckResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create Fri Mar 20 14:36:00 CST 2020
 */
class GroupOpenCheckResponseDTOOutParam implements \JsonSerializable {

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
     * @var GroupOpenCheckResponseDTO
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
     * @return GroupOpenCheckResponseDTO
     */
    public function getData(): GroupOpenCheckResponseDTO
    {
        return $this->data;
    }

    /**
     * @param GroupOpenCheckResponseDTO $data
     */
    public function setData(GroupOpenCheckResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}