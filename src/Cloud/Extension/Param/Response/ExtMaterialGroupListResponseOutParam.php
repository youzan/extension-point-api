<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialGroupListResponse;

/**
 * data返回类
 * @author Baymax
 * @create Wed May 28 10:04:58 CST 2025
 */
class ExtMaterialGroupListResponseOutParam implements \JsonSerializable {

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
     * @var ExtMaterialGroupListResponse
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
     * @return ExtMaterialGroupListResponse
     */
    public function getData(): ?ExtMaterialGroupListResponse
    {
        return $this->data;
    }

    /**
     * @param ExtMaterialGroupListResponse $data
     */
    public function setData(?ExtMaterialGroupListResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}