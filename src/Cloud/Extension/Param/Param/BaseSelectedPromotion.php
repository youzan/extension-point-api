<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BaseSelectedPromotion implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $selectedOrder;



    /**
     * @return int
     */
    public function getSelectedOrder(): ?int
    {
        return $this->selectedOrder;
    }

    /**
     * @param int $selectedOrder
     */
    public function setSelectedOrder(?int $selectedOrder): void
    {
        $this->selectedOrder = $selectedOrder;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}