<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\OrderDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\CurrentDeliveryRequestDTO;

/**
 * 业务校验请求
 * @author Baymax
 * @create Thu Jan 13 20:41:46 CST 2022
 */
class DeliveryBizValidatorReqDTO implements \JsonSerializable {

    /**
     * 订单信息
     * @var OrderDTO
     */
    private $orderDTO;

    /**
     * 当前发货信息
     * @var CurrentDeliveryRequestDTO
     */
    private $currentDeliveryRequestDTO;



    /**
     * @return OrderDTO
     */
    public function getOrderDTO(): ?OrderDTO
    {
        return $this->orderDTO;
    }

    /**
     * @param OrderDTO $orderDTO
     */
    public function setOrderDTO(?OrderDTO $orderDTO): void
    {
        $this->orderDTO = $orderDTO;
    }

    /**
     * @return CurrentDeliveryRequestDTO
     */
    public function getCurrentDeliveryRequestDTO(): ?CurrentDeliveryRequestDTO
    {
        return $this->currentDeliveryRequestDTO;
    }

    /**
     * @param CurrentDeliveryRequestDTO $currentDeliveryRequestDTO
     */
    public function setCurrentDeliveryRequestDTO(?CurrentDeliveryRequestDTO $currentDeliveryRequestDTO): void
    {
        $this->currentDeliveryRequestDTO = $currentDeliveryRequestDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}