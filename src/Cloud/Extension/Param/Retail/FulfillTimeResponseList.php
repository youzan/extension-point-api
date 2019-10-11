<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-10-11 15:15:59.0
 */
class FulfillTimeResponseList implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $skuNo;

    /**
     * 
     * @var int
     */
    private $num;

    /**
     * 
     * @var string
     */
    private $distance;

    /**
     * 
     * @var int
     */
    private $totalStoreSeconds;

    /**
     * 
     * @var int
     */
    private $totalDeliverySeconds;



    /**
     * @return int
     */
    public function getSkuNo(): int
    {
        return $this->skuNo;
    }

    /**
     * @param int $skuNo
     */
    public function setSkuNo(int $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getDistance(): string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance(string $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getTotalStoreSeconds(): int
    {
        return $this->totalStoreSeconds;
    }

    /**
     * @param int $totalStoreSeconds
     */
    public function setTotalStoreSeconds(int $totalStoreSeconds): void
    {
        $this->totalStoreSeconds = $totalStoreSeconds;
    }

    /**
     * @return int
     */
    public function getTotalDeliverySeconds(): int
    {
        return $this->totalDeliverySeconds;
    }

    /**
     * @param int $totalDeliverySeconds
     */
    public function setTotalDeliverySeconds(int $totalDeliverySeconds): void
    {
        $this->totalDeliverySeconds = $totalDeliverySeconds;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}