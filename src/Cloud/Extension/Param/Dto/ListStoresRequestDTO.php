<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class ListStoresRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 有赞用户id，用户在有赞的唯一id。推荐使用 LnhGm4rh576452722916618240
     * @var int
     */
    private $yz_open_id;

    /**
     * 搜索关键词（会和网点名称还有网点详细地址进行模糊匹配）
     * @var string
     */
    private $keyword;

    /**
     * 经度（百度系）
     * @var string
     */
    private $lng;

    /**
     * 纬度（百度系）
     * @var string
     */
    private $lat;

    /**
     * 城市
     * @var string
     */
    private $city;

    /**
     * 地区id，详情可以使用该接口获取：https://doc.youzanyun.com/detail/API/0/187
     * @var string
     */
    private $regionId;



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
    public function getYz_open_id(): ?int
    {
        return $this->yz_open_id;
    }

    /**
     * @param int $yz_open_id
     */
    public function setYz_open_id(?int $yz_open_id): void
    {
        $this->yz_open_id = $yz_open_id;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
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
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    /**
     * @param string $regionId
     */
    public function setRegionId(?string $regionId): void
    {
        $this->regionId = $regionId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}