<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyCodeGenerateExtPointResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-07-29 19:10:31.0
 */
class VoucherVerifyCodeGenerateExtPointResponseOutParam implements \JsonSerializable {

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
     * @var VoucherVerifyCodeGenerateExtPointResponse
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
     * @return VoucherVerifyCodeGenerateExtPointResponse
     */
    public function getData(): VoucherVerifyCodeGenerateExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param VoucherVerifyCodeGenerateExtPointResponse $data
     */
    public function setData(VoucherVerifyCodeGenerateExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}