<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\BuyerVoucherDto;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-10-25 11:04:48.0
 */
class VoucherCopyWriteExtPointRequest implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var int
     */
    private $rootKdtId;

    /**
     * 
     * @var int
     */
    private $userId;

    /**
     * 
     * @var array
     */
    private $voucherDtoList;

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
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return array
     */
    public function getVoucherDtoList(): ?array
    {
        return $this->voucherDtoList;
    }

    /**
     * @param array $voucherDtoList
     */
    public function setVoucherDtoList(?array $voucherDtoList): void
    {
        $this->voucherDtoList = $voucherDtoList;
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