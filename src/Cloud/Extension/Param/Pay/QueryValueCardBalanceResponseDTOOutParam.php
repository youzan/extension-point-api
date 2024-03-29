<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\QueryValueCardBalanceResponseDTO;

/**
 * 响应参数返回类
 * @author Baymax
 * @create Thu Feb 10 13:06:13 CST 2022
 */
class QueryValueCardBalanceResponseDTOOutParam implements \JsonSerializable {

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
     * @var QueryValueCardBalanceResponseDTO
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
     * @return QueryValueCardBalanceResponseDTO
     */
    public function getData(): ?QueryValueCardBalanceResponseDTO
    {
        return $this->data;
    }

    /**
     * @param QueryValueCardBalanceResponseDTO $data
     */
    public function setData(?QueryValueCardBalanceResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}