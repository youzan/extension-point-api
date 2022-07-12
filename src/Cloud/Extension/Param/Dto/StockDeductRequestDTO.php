<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ItemInfoOpenDTO;

/**
 * 
 * @author Baymax
 * @create 2021-09-23 18:45:31.0
 */
class StockDeductRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 网点id
     * @var int
     */
    private $offlineId;

    /**
     * 商品信息
     * @var array
     */
    private $itemInfos;

    /**
     * 订单编号
     * @var string
     */
    private $tid;

    /**
     * 库存模式
     * @var int
     */
    private $stockMode;



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
     * @return array
     */
    public function getItemInfos(): ?array
    {
        return $this->itemInfos;
    }

    /**
     * @param array $itemInfos
     */
    public function setItemInfos(?array $itemInfos): void
    {
        $this->itemInfos = $itemInfos;
    }

    /**
     * @return string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(?string $tid): void
    {
        $this->tid = $tid;
    }

    /**
     * @return int
     */
    public function getStockMode(): ?int
    {
        return $this->stockMode;
    }

    /**
     * @param int $stockMode
     */
    public function setStockMode(?int $stockMode): void
    {
        $this->stockMode = $stockMode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}