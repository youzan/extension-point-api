<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemTradeCloudExtResponse;

/**
 *  返回类
 * @author Baymax
 * @create Sun Mar 20 16:00:10 CST 2022
 */
class ItemTradeCloudExtResponseOutParam implements \JsonSerializable {

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
     * @var ItemTradeCloudExtResponse
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
     * @return ItemTradeCloudExtResponse
     */
    public function getData(): ?ItemTradeCloudExtResponse
    {
        return $this->data;
    }

    /**
     * @param ItemTradeCloudExtResponse $data
     */
    public function setData(?ItemTradeCloudExtResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}