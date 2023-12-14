<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;



/**
 * request
 * @author Baymax
 * @create Thu Oct 19 20:18:50 CST 2023
 */
class ExtOrderSettleRequest implements \JsonSerializable {

    /**
     * 触发结算的分销员订单号
     * @var string
     */
    private $orderNo;

    /**
     * 分销员订单所属的店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}