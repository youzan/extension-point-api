<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVoucherbDTO;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Fri Aug 22 11:21:12 CST 2025
 */
class ThirdpartyVoucherBatchSendExtPointResponse implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $thirdpartyVouchers;

    /**
     * 请求结果true-成功 false-失败
     * @var bool
     */
    private $success;

    /**
     *  
     * @var string
     */
    private $errorMsg;

    /**
     * 是否幂等成功 true-是幂等请求 false -不是幂等请求
     * @var bool
     */
    private $idempotentSuccess;

    /**
     *  
     * @var int
     */
    private $versionNo;

    /**
     *  
     * @var stdClass
     */
    private $extMap;



    /**
     * @return array
     */
    public function getThirdpartyVouchers(): ?array
    {
        return $this->thirdpartyVouchers;
    }

    /**
     * @param array $thirdpartyVouchers
     */
    public function setThirdpartyVouchers(?array $thirdpartyVouchers): void
    {
        $this->thirdpartyVouchers = $thirdpartyVouchers;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(?string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return bool
     */
    public function getIdempotentSuccess(): ?bool
    {
        return $this->idempotentSuccess;
    }

    /**
     * @param bool $idempotentSuccess
     */
    public function setIdempotentSuccess(?bool $idempotentSuccess): void
    {
        $this->idempotentSuccess = $idempotentSuccess;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}