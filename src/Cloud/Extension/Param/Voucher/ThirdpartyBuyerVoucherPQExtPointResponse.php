<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:36:31.0
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
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return array
     */
    public function getThirdpartyVouchers(): array
    {
        return $this->thirdpartyVouchers;
    }

    /**
     * @param array $thirdpartyVouchers
     */
    public function setThirdpartyVouchers(array $thirdpartyVouchers): void
    {
        $this->thirdpartyVouchers = $thirdpartyVouchers;
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