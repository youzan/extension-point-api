<?php

namespace Com\Youzan\Cloud\Extension\Param\Dc;

use Com\Youzan\Cloud\Extension\Param\OrderDTO;

/**
 * 发货校验请求参数
 * @author Baymax
 * @create 2019-05-13 17:19:36.0
 */
class DeliveryBizValidatorRequestDTO implements \JsonSerializable {

    /**
     * 订单数据
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