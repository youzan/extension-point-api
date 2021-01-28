<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:36:03.0
 */
class VoucherVerifyExtPointResponse implements \JsonSerializable {

    /**
     * 核销是否成功（请求成功）
     * @var bool
     */
    private $verifySuccess;

    /**
     * 是否为核销操作幂等成功，若不是幂等，则为false
     * @var bool
     */
    private $idempotentSuccess;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号来源
     * @var string
     */
    private $orderSource;

    /**
     * 一般为错误信息
     * @var string
     */
    private $errorMsg;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;



    /**
     * @return bool
     */
    public function getVerifySuccess(): bool
    {
        return $this->verifySuccess;
    }

    /**
     * @param bool $verifySuccess
     */
    public function setVerifySuccess(bool $verifySuccess): void
    {
        $this->verifySuccess = $verifySuccess;
    }

    /**
     * @return bool
     */
    public function getIdempotentSuccess(): bool
    {
        return $this->idempotentSuccess;
    }

    /**
     * @param bool $idempotentSuccess
     */
    public function setIdempotentSuccess(bool $idempotentSuccess): void
    {
        $this->idempotentSuccess = $idempotentSuccess;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderSource(): string
    {
        return $this->orderSource;
    }

    /**
     * @param string $orderSource
     */
    public function setOrderSource(string $orderSource): void
    {
        $this->orderSource = $orderSource;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return int
     */
    public function getVersionNo(): int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}