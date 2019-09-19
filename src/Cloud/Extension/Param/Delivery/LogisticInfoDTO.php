<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * ??
 * @author Baymax
 * @create 2019-09-19 19:38:10.0
 */
class LogisticInfoDTO implements \JsonSerializable {

    /**
     * 1 —&gt; 待接单; 2 —&gt; 待取货|已接单; 3 —&gt; 配送中; 4 —&gt; 已完成; 5 —&gt; 已取消;
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
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getTimeStatusUpdate(): int
    {
        return $this->timeStatusUpdate;
    }

    /**
     * @param int $timeStatusUpdate
     */
    public function setTimeStatusUpdate(int $timeStatusUpdate): void
    {
        $this->timeStatusUpdate = $timeStatusUpdate;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}