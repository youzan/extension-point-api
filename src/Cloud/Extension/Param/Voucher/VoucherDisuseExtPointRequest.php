<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\VoucherIdentityExtPointDTO;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Thu Jan 13 20:57:14 CST 2022
 */
class VoucherDisuseExtPointRequest implements \JsonSerializable {

    /**
     * 当前店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总店id
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
     * 凭证对象
     * @var VoucherIdentityExtPointDTO
     */
    private $voucherIdentity;

    /**
     * 版本号
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}