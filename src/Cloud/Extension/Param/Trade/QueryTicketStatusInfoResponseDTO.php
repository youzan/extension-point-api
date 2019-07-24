<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create 2019-07-24 10:17:31.0
 */
class QueryTicketStatusInfoResponseDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 毫秒时间戳
     * @var int
     */
    private $effectiveEndTime;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
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

    /**
     * @return int
     */
    public function getEffectiveEndTime(): int
    {
        return $this->effectiveEndTime;
    }

    /**
     * @param int $effectiveEndTime
     */
    public function setEffectiveEndTime(int $effectiveEndTime): void
    {
        $this->effectiveEndTime = $effectiveEndTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}