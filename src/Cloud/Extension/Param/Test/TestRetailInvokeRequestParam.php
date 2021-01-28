<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 
 * @author Baymax
 * @create 2019-07-30 13:59:22.0
 */
class TestRetailInvokeRequestParam implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var string
     */
    private $orderNo;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}