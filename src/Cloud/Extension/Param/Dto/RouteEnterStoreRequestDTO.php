<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求体
 * @author Baymax
 * @create 2021-05-24 20:23:00.0
 */
class RouteEnterStoreRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}