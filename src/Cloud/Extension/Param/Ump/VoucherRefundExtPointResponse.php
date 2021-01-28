<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-28 17:46:24.0
 */
class VoucherRefundExtPointResponse implements \JsonSerializable {

    /**
     * 退还操作是否成功
     * @var bool
     */
    private $success;

    /**
     * 退还失败信息，success为false时，不为空
     * @var string
     */
    private $errorMsg;

    /**
     * 是否为幂等成功
     * @var bool
     */
    private $idempotentSuccess;

    /**
     * 是否是系统错误，success为false时，不为空
     * @var bool
     */
    private $isSystemError;

    /**
     * 外部券核销关联的有赞订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号来源 YZ_TRADE 有赞订单号
     * @var string
     */
    private $orderNoSource;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extMap;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;



    /**
     * @return bool
     */
    public function getSuccess(): bool
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
     * @return bool
     */
    public function getIsSystemError(): bool
    {
        return $this->isSystemError;
    }

    /**
     * @param bool $isSystemError
     */
    public function setIsSystemError(bool $isSystemError): void
    {
        $this->isSystemError = $isSystemError;
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
    public function getOrderNoSource(): string
    {
        return $this->orderNoSource;
    }

    /**
     * @param string $orderNoSource
     */
    public function setOrderNoSource(string $orderNoSource): void
    {
        $this->orderNoSource = $orderNoSource;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}