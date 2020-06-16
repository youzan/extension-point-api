<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 外部活动涉及的商品优惠详情
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class GoodsResponse implements \JsonSerializable {

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * 明细id
     * @var int
     */
    private $orderItemId;

    /**
     * 优惠金额/分
     * @var int
     */
    private $decrease;



    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}