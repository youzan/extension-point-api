<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVoucherDTO;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 17:42:26 CST 2022
 */
class ThirdpartyBuyerVoucherPQExtPointResponse implements \JsonSerializable {

    /**
     * 外部券列表
     * @var array
     */
    private $thirdpartyVouchers;

    /**
     *  
     * @var int
     */
    private $versionNo;



    /**
     * @return array
     */
    public function getThirdpartyVouchers(): ?array
    {
        return $this->thirdpartyVouchers;
    }

    /**
     * @param array $thirdpartyVouchers
     */
    public function setThirdpartyVouchers(?array $thirdpartyVouchers): void
    {
        $this->thirdpartyVouchers = $thirdpartyVouchers;
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