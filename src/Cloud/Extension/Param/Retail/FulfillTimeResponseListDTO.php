<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-10-12 10:30:49.0
 */
class FulfillTimeResponseListDTO implements \JsonSerializable {

    /**
     * 门店/仓库编码
     * @var string
     */
    private $wareHouseCode;

    /**
     * sku编码
     * @var string
     */
    private $skuNo;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 买家距离(km)
     * @var string
     */
    private $distance;

    /**
     * 备货时常(秒)
     * @var int
     */
    private $totalStoreSeconds;

    /**
     * 配送时长(秒)
     * @var int
     */
    private $totalDeliverySeconds;



    /**
     * @return string
     */
    public function getWareHouseCode(): ?string
    {
        return $this->wareHouseCode;
    }

    /**
     * @param string $wareHouseCode
     */
    public function setWareHouseCode(?string $wareHouseCode): void
    {
        $this->wareHouseCode = $wareHouseCode;
    }

    /**
     * @return string
     */
    public function getSkuNo(): ?string
    {
        return $this->skuNo;
    }

    /**
     * @param string $skuNo
     */
    public function setSkuNo(?string $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getDistance(): ?string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance(?string $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getTotalStoreSeconds(): ?int
    {
        return $this->totalStoreSeconds;
    }

    /**
     * @param int $totalStoreSeconds
     */
    public function setTotalStoreSeconds(?int $totalStoreSeconds): void
    {
        $this->totalStoreSeconds = $totalStoreSeconds;
    }

    /**
     * @return int
     */
    public function getTotalDeliverySeconds(): ?int
    {
        return $this->totalDeliverySeconds;
    }

    /**
     * @param int $totalDeliverySeconds
     */
    public function setTotalDeliverySeconds(?int $totalDeliverySeconds): void
    {
        $this->totalDeliverySeconds = $totalDeliverySeconds;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}