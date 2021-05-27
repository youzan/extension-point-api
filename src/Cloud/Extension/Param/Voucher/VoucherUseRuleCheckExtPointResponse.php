<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\CloudVerifyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-05-18 16:24:01.0
 */
class VoucherUseRuleCheckExtPointResponse implements \JsonSerializable {

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}