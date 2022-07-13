<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\BuyerVoucherCustomDto;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-10-25 11:04:48.0
 */
class VoucherCopyWriteExtPointResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $voucherCustomDtoList;

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
    public function getVoucherCustomDtoList(): ?array
    {
        return $this->voucherCustomDtoList;
    }

    /**
     * @param array $voucherCustomDtoList
     */
    public function setVoucherCustomDtoList(?array $voucherCustomDtoList): void
    {
        $this->voucherCustomDtoList = $voucherCustomDtoList;
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