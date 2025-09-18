<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Fri Aug 22 11:35:00 CST 2025
 */
class VoucherDisuseExtPointResponse implements \JsonSerializable {

    /**
     * 作废结果
     * @var bool
     */
    private $disuseResult;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extMap;

    /**
     * 版本号
     * @var int
     */
    private $versionNo;



    /**
     * @return bool
     */
    public function getDisuseResult(): ?bool
    {
        return $this->disuseResult;
    }

    /**
     * @param bool $disuseResult
     */
    public function setDisuseResult(?bool $disuseResult): void
    {
        $this->disuseResult = $disuseResult;
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