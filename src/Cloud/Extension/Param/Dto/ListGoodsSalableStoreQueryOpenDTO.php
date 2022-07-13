<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-09-08 11:04:43.0
 */
class ListGoodsSalableStoreQueryOpenDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 商品id
     * @var int
     */
    private $itemsId;

    /**
     * 网点id
     * @var int
     */
    private $offlineId;

    /**
     * 纬度（百度系）
     * @var string
     */
    private $lat;

    /**
     * 经度（百度系）
     * @var string
     */
    private $lng;

    /**
     * 是否排除已休息网点
     * @var bool
     */
    private $hideRestStore;



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
    public function getItemsId(): ?int
    {
        return $this->itemsId;
    }

    /**
     * @param int $itemsId
     */
    public function setItemsId(?int $itemsId): void
    {
        $this->itemsId = $itemsId;
    }

    /**
     * @return int
     */
    public function getOfflineId(): ?int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(?int $offlineId): void
    {
        $this->offlineId = $offlineId;
    }

    /**
     * @return string
     */
    public function getLat(): ?string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     */
    public function setLat(?string $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getLng(): ?string
    {
        return $this->lng;
    }

    /**
     * @param string $lng
     */
    public function setLng(?string $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return bool
     */
    public function getHideRestStore(): ?bool
    {
        return $this->hideRestStore;
    }

    /**
     * @param bool $hideRestStore
     */
    public function setHideRestStore(?bool $hideRestStore): void
    {
        $this->hideRestStore = $hideRestStore;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}