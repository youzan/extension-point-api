<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 数据
 * @author Baymax
 * @create Tue Jan 11 19:38:05 CST 2022
 */
class VoucherVerifyCheckExtPointResponse implements \JsonSerializable {

    /**
     * 是否可以核销
     * @var bool
     */
    private $canVerify;

    /**
     * 不可核销原因
     * @var string
     */
    private $unAvailableReason;

    /**
     * 版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;



    /**
     * @return bool
     */
    public function getCanVerify(): ?bool
    {
        return $this->canVerify;
    }

    /**
     * @param bool $canVerify
     */
    public function setCanVerify(?bool $canVerify): void
    {
        $this->canVerify = $canVerify;
    }

    /**
     * @return string
     */
    public function getUnAvailableReason(): ?string
    {
        return $this->unAvailableReason;
    }

    /**
     * @param string $unAvailableReason
     */
    public function setUnAvailableReason(?string $unAvailableReason): void
    {
        $this->unAvailableReason = $unAvailableReason;
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