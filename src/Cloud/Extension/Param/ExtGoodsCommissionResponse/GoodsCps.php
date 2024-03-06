<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtGoodsCommissionResponse;



/**
 * 商品佣金列表
 * @author Baymax
 * @create Mon Jun 06 14:04:50 CST 2022
 */
class GoodsCps implements \JsonSerializable {

    /**
     * 店铺商品ID
     * @var int
     */
    private $goodsId;

    /**
     * 销售导购佣金金额（单位：分）
     * @var int
     */
    private $salesCpsMoney;

    /**
     * 专属导购佣金金额（单位：分）
     * @var int
     */
    private $serviceCpsMoney;



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
    public function getSalesCpsMoney(): ?int
    {
        return $this->salesCpsMoney;
    }

    /**
     * @param int $salesCpsMoney
     */
    public function setSalesCpsMoney(?int $salesCpsMoney): void
    {
        $this->salesCpsMoney = $salesCpsMoney;
    }

    /**
     * @return int
     */
    public function getServiceCpsMoney(): ?int
    {
        return $this->serviceCpsMoney;
    }

    /**
     * @param int $serviceCpsMoney
     */
    public function setServiceCpsMoney(?int $serviceCpsMoney): void
    {
        $this->serviceCpsMoney = $serviceCpsMoney;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}