<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Wed Jun 18 16:45:05 CST 2025
 */
class VoucherRecycleExtPointResponse implements \JsonSerializable {

    /**
     * 回收结果
     * @var bool
     */
    private $recycleResult;

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
    public function getRecycleResult(): ?bool
    {
        return $this->recycleResult;
    }

    /**
     * @param bool $recycleResult
     */
    public function setRecycleResult(?bool $recycleResult): void
    {
        $this->recycleResult = $recycleResult;
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