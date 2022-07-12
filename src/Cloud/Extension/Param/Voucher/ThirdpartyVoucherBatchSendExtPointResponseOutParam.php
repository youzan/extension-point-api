<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherBatchSendExtPointResponse;

/**
 *  返回类
 * @author Baymax
 * @create Mon Mar 14 19:44:58 CST 2022
 */
class ThirdpartyVoucherBatchSendExtPointResponseOutParam implements \JsonSerializable {

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
     * @var ThirdpartyVoucherBatchSendExtPointResponse
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
     * @return ThirdpartyVoucherBatchSendExtPointResponse
     */
    public function getData(): ?ThirdpartyVoucherBatchSendExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param ThirdpartyVoucherBatchSendExtPointResponse $data
     */
    public function setData(?ThirdpartyVoucherBatchSendExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}