<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class PresentTemplate implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $presentId;

    /**
     *  
     * @var string
     */
    private $title;

    /**
     *  
     * @var string
     */
    private $alias;

    /**
     *  
     * @var int
     */
    private $kdtId;

    /**
     *  
     * @var int
     */
    private $startTime;

    /**
     *  
     * @var int
     */
    private $endTime;

    /**
     *  
     * @var int
     */
    private $stockNum;

    /**
     *  
     * @var int
     */
    private $isDelete;

    /**
     *  
     * @var int
     */
    private $channel;

    /**
     *  
     * @var int
     */
    private $stage;

    /**
     *  
     * @var int
     */
    private $goodsId;

    /**
     *  
     * @var string
     */
    private $goodsAlias;

    /**
     *  
     * @var int
     */
    private $skuId;



    /**
     * @return int
     */
    public function getPresentId(): ?int
    {
        return $this->presentId;
    }

    /**
     * @param int $presentId
     */
    public function setPresentId(?int $presentId): void
    {
        $this->presentId = $presentId;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
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
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int $startTime
     */
    public function setStartTime(?int $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     */
    public function setEndTime(?int $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return int
     */
    public function getStockNum(): ?int
    {
        return $this->stockNum;
    }

    /**
     * @param int $stockNum
     */
    public function setStockNum(?int $stockNum): void
    {
        $this->stockNum = $stockNum;
    }

    /**
     * @return int
     */
    public function getIsDelete(): ?int
    {
        return $this->isDelete;
    }

    /**
     * @param int $isDelete
     */
    public function setIsDelete(?int $isDelete): void
    {
        $this->isDelete = $isDelete;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getStage(): ?int
    {
        return $this->stage;
    }

    /**
     * @param int $stage
     */
    public function setStage(?int $stage): void
    {
        $this->stage = $stage;
    }

    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return string
     */
    public function getGoodsAlias(): ?string
    {
        return $this->goodsAlias;
    }

    /**
     * @param string $goodsAlias
     */
    public function setGoodsAlias(?string $goodsAlias): void
    {
        $this->goodsAlias = $goodsAlias;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}