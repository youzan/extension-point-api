<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;

use Com\Youzan\Cloud\Extension\Param\Shop\ShopRouteResult;

/**
 * 响应参数返回类
 * @author Baymax
 * @create Mon Mar 14 16:49:17 CST 2022
 */
class ShopRouteResultOutParam implements \JsonSerializable {

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
     * @var ShopRouteResult
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
     * @return ShopRouteResult
     */
    public function getData(): ?ShopRouteResult
    {
        return $this->data;
    }

    /**
     * @param ShopRouteResult $data
     */
    public function setData(?ShopRouteResult $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}