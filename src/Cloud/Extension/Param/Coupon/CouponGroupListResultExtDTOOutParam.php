<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupListResultExtDTO;

/**
 * 返回参数返回类
 * @author Baymax
 * @create Sat Sep 29 21:40:57 CST 2018
 */
class CouponGroupListResultExtDTOOutParam implements \JsonSerializable {

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
     * @var CouponGroupListResultExtDTO
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
     * @return CouponGroupListResultExtDTO
     */
    public function getData(): ?CouponGroupListResultExtDTO
    {
        return $this->data;
    }

    /**
     * @param CouponGroupListResultExtDTO $data
     */
    public function setData(?CouponGroupListResultExtDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}