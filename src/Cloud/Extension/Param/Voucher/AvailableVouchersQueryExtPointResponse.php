<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyVoucheraDTO;
use StdClass;

/**
 * 返回值
 * @author Baymax
 * @create Wed Jun 18 16:53:00 CST 2025
 */
class AvailableVouchersQueryExtPointResponse implements \JsonSerializable {

    /**
     * 外部券信息
     * @var array
     */
    private $thirdpartyVouchers;

    /**
     * 扩展点版本
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