<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\OrderDTO;

/**
 * 业务校验请求
 * @author Baymax
 * @create Wed Jun 05 11:56:20 CST 2019
 */
class DeliveryBizValidatorReqDTO implements \JsonSerializable {

    /**
     * 订单信息
     * @var OrderDTO
     */
    private $orderDTO;



    /**
     * @return OrderDTO
     */
    public function getOrderDTO(): OrderDTO
    {
        return $this->orderDTO;
    }

    /**
     * @param OrderDTO $orderDTO
     */
    public function setOrderDTO(OrderDTO $orderDTO): void
    {
        $this->orderDTO = $orderDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}