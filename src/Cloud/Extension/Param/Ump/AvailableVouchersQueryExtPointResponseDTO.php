<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\ThirdpartyVoucherDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 20:30:39.0
 */
class AvailableVouchersQueryExtPointResponseDTO implements \JsonSerializable {

    /**
     * 可用优惠券列表
     * @var array
     */
    private $thirdpartyVouchers;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
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