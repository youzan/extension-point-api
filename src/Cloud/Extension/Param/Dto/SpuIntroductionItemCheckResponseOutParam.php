<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SpuIntroductionItemCheckResponse;

/**
 * 返回结果返回类
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class SpuIntroductionItemCheckResponseOutParam implements \JsonSerializable {

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
     * @var SpuIntroductionItemCheckResponse
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
     * @return SpuIntroductionItemCheckResponse
     */
    public function getData(): ?SpuIntroductionItemCheckResponse
    {
        return $this->data;
    }

    /**
     * @param SpuIntroductionItemCheckResponse $data
     */
    public function setData(?SpuIntroductionItemCheckResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}