<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchPointGoodsInfo;

/**
 * 接口入参对象
 * @author Baymax
 * @create Thu Jul 20 19:27:26 CST 2023
 */
class SelfFetchWithSoldStatusQueryExtDTO implements \JsonSerializable {

    /**
     * 微商城单店店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 微商城连锁总店店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 微商城连锁网店店铺ID
     * @var int
     */
    private $nodeKdtId;

    /**
     * 用户ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 自提点下单页商品详情信息
     * @var array
     */
    private $items;

    /**
     * 纬度
     * @var float
     */
    private $lat;

    /**
     * 经度
     * @var float
     */
    private $lng;

    /**
     * 页码，从1开始
     * @var int
     */
    private $page;

    /**
     * 页大小
     * @var int
     */
    private $pageSize;



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

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(?float $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLng(): ?float
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     */
    public function setLng(?float $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}