<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 失败订单信息
 * @author Baymax
 * @create Thu Mar 14 15:34:50 CST 2019
 */
class InvalidOrderItemMsgDTO implements \JsonSerializable {

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 数量
     * @var int
     */
    private $num;

    /**
     * 订单项id
     * @var int
     */
    private $orderItemId;

    /**
     * sku信息
     * @var SkuCompositeId
     */
    private $skuCompositeId;



    /**
     * @return int
     */
    public function getGoodsType(): int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
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
     * @return SkuCompositeId
     */
    public function getSkuCompositeId(): SkuCompositeId
    {
        return $this->skuCompositeId;
    }

    /**
     * @param SkuCompositeId $skuCompositeId
     */
    public function setSkuCompositeId(SkuCompositeId $skuCompositeId): void
    {
        $this->skuCompositeId = $skuCompositeId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}