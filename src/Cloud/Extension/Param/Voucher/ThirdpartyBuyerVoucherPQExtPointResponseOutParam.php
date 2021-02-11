<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyBuyerVoucherPQExtPointResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2020-02-12 16:36:31.0
 */
class ThirdpartyBuyerVoucherPQExtPointResponseOutParam implements \JsonSerializable {

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
     * @var ThirdpartyBuyerVoucherPQExtPointResponse
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
     * @return ThirdpartyBuyerVoucherPQExtPointResponse
     */
    public function getData(): ThirdpartyBuyerVoucherPQExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param ThirdpartyBuyerVoucherPQExtPointResponse $data
     */
    public function setData(ThirdpartyBuyerVoucherPQExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}