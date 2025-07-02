<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\VoucherIdentityExtPointDTO;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Wed Jun 18 16:45:05 CST 2025
 */
class VoucherRecycleExtPointRequest implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总店店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 外部活动id
     * @var int
     */
    private $thirdpartyActivityId;

    /**
     * 内部活动id
     * @var int
     */
    private $voucherActivityId;

    /**
     * 优惠券凭证信息
     * @var VoucherIdentityExtPointDTO
     */
    private $voucherIdentity;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extMap;

    /**
     * 核销码
     * @var string
     */
    private $verifyCode;

    /**
     * 请求id
     * @var string
     */
    private $requestId;

    /**
     * 识别上游是批量回收操作还是单个回收操作 批量：BATCH 单个：SINGLE
     * @var string
     */
    private $operationMode;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getThirdpartyActivityId(): ?int
    {
        return $this->thirdpartyActivityId;
    }

    /**
     * @param int $thirdpartyActivityId
     */
    public function setThirdpartyActivityId(?int $thirdpartyActivityId): void
    {
        $this->thirdpartyActivityId = $thirdpartyActivityId;
    }

    /**
     * @return int
     */
    public function getVoucherActivityId(): ?int
    {
        return $this->voucherActivityId;
    }

    /**
     * @param int $voucherActivityId
     */
    public function setVoucherActivityId(?int $voucherActivityId): void
    {
        $this->voucherActivityId = $voucherActivityId;
    }

    /**
     * @return VoucherIdentityExtPointDTO
     */
    public function getVoucherIdentity(): ?VoucherIdentityExtPointDTO
    {
        return $this->voucherIdentity;
    }

    /**
     * @param VoucherIdentityExtPointDTO $voucherIdentity
     */
    public function setVoucherIdentity(?VoucherIdentityExtPointDTO $voucherIdentity): void
    {
        $this->voucherIdentity = $voucherIdentity;
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

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getOperationMode(): ?string
    {
        return $this->operationMode;
    }

    /**
     * @param string $operationMode
     */
    public function setOperationMode(?string $operationMode): void
    {
        $this->operationMode = $operationMode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}