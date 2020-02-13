<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVouchersDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:35:56.0
 */
class VoucherQueryExtPointResponse implements \JsonSerializable {

    /**
     * 外部券信息
     * @var ThirdpartyVouchersDTO
     */
    private $thirdpartyVoucher;

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
     * @return ThirdpartyVouchersDTO
     */
    public function getThirdpartyVoucher(): ThirdpartyVouchersDTO
    {
        return $this->thirdpartyVoucher;
    }

    /**
     * @param ThirdpartyVouchersDTO $thirdpartyVoucher
     */
    public function setThirdpartyVoucher(ThirdpartyVouchersDTO $thirdpartyVoucher): void
    {
        $this->thirdpartyVoucher = $thirdpartyVoucher;
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