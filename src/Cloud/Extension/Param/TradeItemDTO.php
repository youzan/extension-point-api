<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 交易条目
 * @author Baymax
 * @create 2019-03-26 13:18:47.0
 */
class TradeItemDTO implements \JsonSerializable {

    /**
     * sku复合Id
     * @var SkuCompositeId
     */
    private $skuCompositeId;

    /**
     * 数量
     * @var int
     */
    private $num;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 商品留言
     * @var string
     */
    private $memo;



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
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}