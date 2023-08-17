<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 *  
 * @author Baymax
 * @create Wed Aug 09 17:00:37 CST 2023
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
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getPayDetailNo(): ?string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(?string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}