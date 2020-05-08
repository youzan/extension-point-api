<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;

use Com\Youzan\Cloud\Extension\Param\Goods\ExtGoodsConfigResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-05-08 14:35:44.0
 */
class ExtGoodsConfigResponseOutParam implements \JsonSerializable {

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
     * @var ExtGoodsConfigResponse
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
     * @return ExtGoodsConfigResponse
     */
    public function getData(): ExtGoodsConfigResponse
    {
        return $this->data;
    }

    /**
     * @param ExtGoodsConfigResponse $data
     */
    public function setData(ExtGoodsConfigResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}