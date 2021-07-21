<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-21 23:20:35.0
 */
class VoucherRecycleExtPointResponse implements \JsonSerializable {

    /**
     * 回收结果
     * @var bool
     */
    private $recycleResult;

    /**
     * 
     * @var stdClass
     */
    private $extMap;

    /**
     * 
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