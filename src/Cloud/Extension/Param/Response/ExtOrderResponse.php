<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\ExtOrderResponse\ExtOrder;

/**
 * 返回数据
 * @author Baymax
 * @create Tue Sep 26 14:39:27 CST 2023
 */
class ExtOrderResponse implements \JsonSerializable {

    /**
     * 订单数据集合
     * @var array
     */
    private $orders;



    /**
     * @return array
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * @param array $orders
     */
    public function setOrders(?array $orders): void
    {
        $this->orders = $orders;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}