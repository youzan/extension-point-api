<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchWithSoldStatusResultExtDTO;

/**
 * 第一层返回结果封装data对象返回类
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class SelfFetchWithSoldStatusResultExtDTOOutParam implements \JsonSerializable {

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
     * @var SelfFetchWithSoldStatusResultExtDTO
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
     * @return SelfFetchWithSoldStatusResultExtDTO
     */
    public function getData(): SelfFetchWithSoldStatusResultExtDTO
    {
        return $this->data;
    }

    /**
     * @param SelfFetchWithSoldStatusResultExtDTO $data
     */
    public function setData(SelfFetchWithSoldStatusResultExtDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}