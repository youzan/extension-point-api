<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse;



/**
 * 导购佣金计算明细
 * @author Baymax
 * @create Mon Feb 06 14:37:35 CST 2023
 */
class ExtItemCpsDetail implements \JsonSerializable {

    /**
     * 订单商品Id
     * @var int
     */
    private $itemId;

    /**
     * 商品Id
     * @var int
     */
    private $goodsId;

    /**
     * 商品skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品佣金(单位:分)
     * @var int
     */
    private $cpsMoney;

    /**
     * 商品佣金比例（百分比*10000，如 50% -&gt; 5000     10.8% - &gt; 1080，如果佣金计算类型是按固定金额则传0）
     * @var int
     */
    private $cpsRate;

    /**
     * 佣金计算类型； 按比例：0，按固定金额：1
     * @var int
     */
    private $cpsType;



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

    /**
     * @return int
     */
    public function getCpsMoney(): ?int
    {
        return $this->cpsMoney;
    }

    /**
     * @param int $cpsMoney
     */
    public function setCpsMoney(?int $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return int
     */
    public function getCpsRate(): ?int
    {
        return $this->cpsRate;
    }

    /**
     * @param int $cpsRate
     */
    public function setCpsRate(?int $cpsRate): void
    {
        $this->cpsRate = $cpsRate;
    }

    /**
     * @return int
     */
    public function getCpsType(): ?int
    {
        return $this->cpsType;
    }

    /**
     * @param int $cpsType
     */
    public function setCpsType(?int $cpsType): void
    {
        $this->cpsType = $cpsType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}