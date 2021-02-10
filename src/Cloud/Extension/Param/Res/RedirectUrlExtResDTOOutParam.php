<?php

namespace Com\Youzan\Cloud\Extension\Param\Res;

use Com\Youzan\Cloud\Extension\Param\Res\RedirectUrlExtResDTO;

/**
 * 请求出参返回类
 * @author Baymax
 * @create 2021-01-05 17:51:36.0
 */
class RedirectUrlExtResDTOOutParam implements \JsonSerializable {

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
     * @var RedirectUrlExtResDTO
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
     * @return RedirectUrlExtResDTO
     */
    public function getData(): ?RedirectUrlExtResDTO
    {
        return $this->data;
    }

    /**
     * @param RedirectUrlExtResDTO $data
     */
    public function setData(?RedirectUrlExtResDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}