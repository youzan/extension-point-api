<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherSendExtPointResponse;

/**
 *  返回类
 * @author Baymax
 * @create Wed Jun 28 16:14:52 CST 2023
 */
class ThirdpartyVoucherSendExtPointResponseOutParam implements \JsonSerializable {

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
     * @var ThirdpartyVoucherSendExtPointResponse
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
     * @return ThirdpartyVoucherSendExtPointResponse
     */
    public function getData(): ?ThirdpartyVoucherSendExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param ThirdpartyVoucherSendExtPointResponse $data
     */
    public function setData(?ThirdpartyVoucherSendExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}