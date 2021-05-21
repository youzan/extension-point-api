<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\CloudVerifyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create Mon May 18 16:24:01 CST 2020
 */
class VoucherUseRuleCheckExtPointRequest implements \JsonSerializable {

    /**
     * 核销店铺Id
     * @var int
     */
    private $verifyKdtId;

    /**
     * 核销网点Id，没有开启多网点则此参数为空
     * @var int
     */
    private $verifyStoreId;

    /**
     * 用户Id
     * @var string
     */
    private $yzOpenId;

    /**
     * 
     * @var array
     */
    private $cloudVerifyVoucherList;

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
     * 总部店铺Id，若为单店，则该值为当前店铺Id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return int
     */
    public function getVerifyKdtId(): ?int
    {
        return $this->verifyKdtId;
    }

    /**
     * @param int $verifyKdtId
     */
    public function setVerifyKdtId(?int $verifyKdtId): void
    {
        $this->verifyKdtId = $verifyKdtId;
    }

    /**
     * @return int
     */
    public function getVerifyStoreId(): ?int
    {
        return $this->verifyStoreId;
    }

    /**
     * @param int $verifyStoreId
     */
    public function setVerifyStoreId(?int $verifyStoreId): void
    {
        $this->verifyStoreId = $verifyStoreId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return array
     */
    public function getCloudVerifyVoucherList(): ?array
    {
        return $this->cloudVerifyVoucherList;
    }

    /**
     * @param array $cloudVerifyVoucherList
     */
    public function setCloudVerifyVoucherList(?array $cloudVerifyVoucherList): void
    {
        $this->cloudVerifyVoucherList = $cloudVerifyVoucherList;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}