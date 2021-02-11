<?php

namespace Com\Youzan\Cloud\Extension\Param\Result;

use Com\Youzan\Cloud\Extension\Param\Result\VisitedSubShopPageQueryResult;

/**
 * 返回类
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class VisitedSubShopPageQueryResultOutParam implements \JsonSerializable {

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
     * @var VisitedSubShopPageQueryResult
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
     * @return VisitedSubShopPageQueryResult
     */
    public function getData(): VisitedSubShopPageQueryResult
    {
        return $this->data;
    }

    /**
     * @param VisitedSubShopPageQueryResult $data
     */
    public function setData(VisitedSubShopPageQueryResult $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}