<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\BizTestData;

/**
 * 数据返回类
 * @author Baymax
 * @create 2018-09-17 21:46:05.0
 */
class BizTestDataOutParam implements \JsonSerializable {

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
     * @var BizTestData
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
     * @return BizTestData
     */
    public function getData(): BizTestData
    {
        return $this->data;
    }

    /**
     * @param BizTestData $data
     */
    public function setData(BizTestData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}