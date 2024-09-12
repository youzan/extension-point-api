<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\CobuildWelcomeMsgRespDTO;

/**
 * 返回数据返回类
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildWelcomeMsgRespDTOOutParam implements \JsonSerializable {

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
     * @var CobuildWelcomeMsgRespDTO
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
     * @return CobuildWelcomeMsgRespDTO
     */
    public function getData(): ?CobuildWelcomeMsgRespDTO
    {
        return $this->data;
    }

    /**
     * @param CobuildWelcomeMsgRespDTO $data
     */
    public function setData(?CobuildWelcomeMsgRespDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}