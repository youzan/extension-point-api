<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class User implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $buyerId;

    /**
     *  
     * @var int
     */
    private $salesmanId;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return int
     */
    public function getSalesmanId(): ?int
    {
        return $this->salesmanId;
    }

    /**
     * @param int $salesmanId
     */
    public function setSalesmanId(?int $salesmanId): void
    {
        $this->salesmanId = $salesmanId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}