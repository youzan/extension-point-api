<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-11-22 11:46:25.0
 */
class ValueCardExtPayQueryRequest implements \JsonSerializable {

    /**
     * 支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getPayDetailNo(): string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
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