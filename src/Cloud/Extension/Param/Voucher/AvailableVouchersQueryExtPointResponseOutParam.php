<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Voucher\AvailableVouchersQueryExtPointResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-02-12 16:35:41.0
 */
class AvailableVouchersQueryExtPointResponseOutParam implements \JsonSerializable {

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
     * @var AvailableVouchersQueryExtPointResponse
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
     * @return AvailableVouchersQueryExtPointResponse
     */
    public function getData(): AvailableVouchersQueryExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param AvailableVouchersQueryExtPointResponse $data
     */
    public function setData(AvailableVouchersQueryExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}