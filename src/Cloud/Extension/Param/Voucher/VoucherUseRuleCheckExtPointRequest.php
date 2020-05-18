<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\CloudVerifyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-05-18 16:24:01.0
 */
class VoucherUseRuleCheckExtPointRequest implements \JsonSerializable {

    /**
     * 核销店铺Id
     * @var int
     */
    private $verifyKdtId;

    /**
     * 核销网点Id
     * @var int
     */
    private $verifyStoreId;

    /**
     * 用户Id
     * @var int
     */
    private $userId;

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
     * @return int
     */
    public function getVerifyKdtId(): int
    {
        return $this->verifyKdtId;
    }

    /**
     * @param int $verifyKdtId
     */
    public function setVerifyKdtId(int $verifyKdtId): void
    {
        $this->verifyKdtId = $verifyKdtId;
    }

    /**
     * @return int
     */
    public function getVerifyStoreId(): int
    {
        return $this->verifyStoreId;
    }

    /**
     * @param int $verifyStoreId
     */
    public function setVerifyStoreId(int $verifyStoreId): void
    {
        $this->verifyStoreId = $verifyStoreId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return array
     */
    public function getCloudVerifyVoucherList(): array
    {
        return $this->cloudVerifyVoucherList;
    }

    /**
     * @param array $cloudVerifyVoucherList
     */
    public function setCloudVerifyVoucherList(array $cloudVerifyVoucherList): void
    {
        $this->cloudVerifyVoucherList = $cloudVerifyVoucherList;
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