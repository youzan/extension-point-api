<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\CustomerExtValueCardsQueryResponse;

/**
 *  返回类
 * @author Baymax
 * @create Thu Aug 11 20:19:10 CST 2022
 */
class CustomerExtValueCardsQueryResponseOutParam implements \JsonSerializable {

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
     * @var CustomerExtValueCardsQueryResponse
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
     * @return CustomerExtValueCardsQueryResponse
     */
    public function getData(): ?CustomerExtValueCardsQueryResponse
    {
        return $this->data;
    }

    /**
     * @param CustomerExtValueCardsQueryResponse $data
     */
    public function setData(?CustomerExtValueCardsQueryResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}