<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:52:50 CST 2022
 */
class LogisticInfoDTO implements \JsonSerializable {

    /**
     * 1 —&amp;gt; 待接单; 2 —&amp;gt; 待取货|已接单; 3 —&amp;gt; 配送中; 4 —&amp;gt; 已完成; 5 —&amp;gt; 已取消;
     * @var int
     */
    private $orderStatus;

    /**
     * 操作时间
     * @var int
     */
    private $timeStatusUpdate;



    /**
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(?int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getTimeStatusUpdate(): ?int
    {
        return $this->timeStatusUpdate;
    }

    /**
     * @param int $timeStatusUpdate
     */
    public function setTimeStatusUpdate(?int $timeStatusUpdate): void
    {
        $this->timeStatusUpdate = $timeStatusUpdate;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}