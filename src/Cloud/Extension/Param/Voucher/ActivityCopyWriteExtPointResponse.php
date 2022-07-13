<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Com\Youzan\Cloud\Extension\Param\Dto\ActivityCopyWritingCustomDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create Thu Mar 31 15:29:31 CST 2022
 */
class ActivityCopyWriteExtPointResponse implements \JsonSerializable {

    /**
     * 优惠券活动信息
     * @var array
     */
    private $voucherCustomDtoList;

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