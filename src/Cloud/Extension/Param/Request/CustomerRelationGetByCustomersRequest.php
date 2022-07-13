<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerRelationGetByCustomerRequest;

/**
 * 
 * @author Baymax
 * @create 2021-11-16 18:29:55.0
 */
class CustomerRelationGetByCustomersRequest implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $customers;

    /**
     * 店铺id,当前店铺id，如果是店铺操作，则会传店铺id，如果是总部操作，则不需要传
     * @var int
     */
    private $kdtId;

    /**
     * 商家总部id，如果是单店则是单店店铺id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return array
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * @param array $customers
     */
    public function setCustomers(?array $customers): void
    {
        $this->customers = $customers;
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

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}