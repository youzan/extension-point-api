<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\ThirdpartyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 20:36:12.0
 */
class VoucherQueryExtPointResponseDTO implements \JsonSerializable {

    /**
     * 可用优惠券列表
     * @var ThirdpartyVoucherDTO
     */
    private $thirdpartyVoucher;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * extMap
     * @var stdClass
     */
    private $extMap;



    /**
     * @return ThirdpartyVoucherDTO
     */
    public function getThirdpartyVoucher(): ?ThirdpartyVoucherDTO
    {
        return $this->thirdpartyVoucher;
    }

    /**
     * @param ThirdpartyVoucherDTO $thirdpartyVoucher
     */
    public function setThirdpartyVoucher(?ThirdpartyVoucherDTO $thirdpartyVoucher): void
    {
        $this->thirdpartyVoucher = $thirdpartyVoucher;
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