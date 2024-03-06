<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * 库存扣减详情参数Pram
 * @author Baymax
 * @create Wed Mar 02 15:26:08 CST 2022
 */
class StockDeductCheckDetailExtParam implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 库存扣减数量
     * @var int
     */
    private $stockNum;

    /**
     * 库存扣减场景0：下单扣库存 1：支付扣库存  2：指定门店发货 
     * @var int
     */
    private $deductScene;

    /**
     * 日期SKU时间
     * @var string
     */
    private $stockDate;

    /**
     * 子订单ID
     * @var int
     */
    private $oid;

    /**
     * 额外信息(酒店商品透传订单类型)
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 渠道参数(0：微信 400：抖音POI)
     * @var int
     */
    private $channelId;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
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
    public function getDeductScene(): ?int
    {
        return $this->deductScene;
    }

    /**
     * @param int $deductScene
     */
    public function setDeductScene(?int $deductScene): void
    {
        $this->deductScene = $deductScene;
    }

    /**
     * @return string
     */
    public function getStockDate(): ?string
    {
        return $this->stockDate;
    }

    /**
     * @param string $stockDate
     */
    public function setStockDate(?string $stockDate): void
    {
        $this->stockDate = $stockDate;
    }

    /**
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @param int $oid
     */
    public function setOid(?int $oid): void
    {
        $this->oid = $oid;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): ?stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(?stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     */
    public function setChannelId(?int $channelId): void
    {
        $this->channelId = $channelId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}