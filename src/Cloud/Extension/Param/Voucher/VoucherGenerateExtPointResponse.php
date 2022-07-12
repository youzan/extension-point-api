<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\CloudVoucherGenerateInfoDTO;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 19:46:43 CST 2022
 */
class VoucherGenerateExtPointResponse implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $cloudVoucherGenerateInfos;

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
    public function getCloudVoucherGenerateInfos(): ?array
    {
        return $this->cloudVoucherGenerateInfos;
    }

    /**
     * @param array $cloudVoucherGenerateInfos
     */
    public function setCloudVoucherGenerateInfos(?array $cloudVoucherGenerateInfos): void
    {
        $this->cloudVoucherGenerateInfos = $cloudVoucherGenerateInfos;
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