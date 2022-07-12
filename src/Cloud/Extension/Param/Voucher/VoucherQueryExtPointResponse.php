<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVouchersDTO;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 19:32:49 CST 2022
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
     * @return ThirdpartyVouchersDTO
     */
    public function getThirdpartyVoucher(): ?ThirdpartyVouchersDTO
    {
        return $this->thirdpartyVoucher;
    }

    /**
     * @param ThirdpartyVouchersDTO $thirdpartyVoucher
     */
    public function setThirdpartyVoucher(?ThirdpartyVouchersDTO $thirdpartyVoucher): void
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}