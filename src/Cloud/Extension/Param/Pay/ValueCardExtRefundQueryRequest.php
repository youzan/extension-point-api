<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-11-22 15:19:22.0
 */
class ValueCardExtRefundQueryRequest implements \JsonSerializable {

    /**
     * 退款明细号
     * @var string
     */
    private $refundDetailNo;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getRefundDetailNo(): string
    {
        return $this->refundDetailNo;
    }

    /**
     * @param string $refundDetailNo
     */
    public function setRefundDetailNo(string $refundDetailNo): void
    {
        $this->refundDetailNo = $refundDetailNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}