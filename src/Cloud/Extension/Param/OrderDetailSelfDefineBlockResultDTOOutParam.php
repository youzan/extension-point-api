<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderDetailSelfDefineBlockResultDTO;

/**
 * 订单详情自定义数据返回结果返回类
 * @author Baymax
 * @create 2018-09-14 18:01:22.0
 */
class OrderDetailSelfDefineBlockResultDTOOutParam implements \JsonSerializable {

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
     * @var OrderDetailSelfDefineBlockResultDTO
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
     * @return OrderDetailSelfDefineBlockResultDTO
     */
    public function getData(): OrderDetailSelfDefineBlockResultDTO
    {
        return $this->data;
    }

    /**
     * @param OrderDetailSelfDefineBlockResultDTO $data
     */
    public function setData(OrderDetailSelfDefineBlockResultDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}