<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ValueCardMakeCardResponse;

/**
 *  返回类
 * @author Baymax
 * @create Sun Apr 20 18:53:01 CST 2025
 */
class ValueCardMakeCardResponseOutParam implements \JsonSerializable {

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
     * @var ValueCardMakeCardResponse
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
     * @return ValueCardMakeCardResponse
     */
    public function getData(): ?ValueCardMakeCardResponse
    {
        return $this->data;
    }

    /**
     * @param ValueCardMakeCardResponse $data
     */
    public function setData(?ValueCardMakeCardResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}