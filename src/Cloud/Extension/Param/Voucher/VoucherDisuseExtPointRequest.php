<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\VoucherIdentityExtPointDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-21 23:20:35.0
 */
class VoucherDisuseExtPointRequest implements \JsonSerializable {

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
     * 
     * @var VoucherIdentityExtPointDTO
     */
    private $voucherIdentity;

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}