<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 交易条目
 * @author Baymax
 * @create Tue Mar 26 13:18:47 CST 2019
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
     * 价格日历中的游玩日期
     * @var string
     */
    private $ticketCalendarEffectiveTime;



    /**
     * @return SkuCompositeId
     */
    public function getSkuCompositeId(): ?SkuCompositeId
    {
        return $this->skuCompositeId;
    }

    /**
     * @param SkuCompositeId $skuCompositeId
     */
    public function setSkuCompositeId(?SkuCompositeId $skuCompositeId): void
    {
        $this->skuCompositeId = $skuCompositeId;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getTicketCalendarEffectiveTime(): ?string
    {
        return $this->ticketCalendarEffectiveTime;
    }

    /**
     * @param string $ticketCalendarEffectiveTime
     */
    public function setTicketCalendarEffectiveTime(?string $ticketCalendarEffectiveTime): void
    {
        $this->ticketCalendarEffectiveTime = $ticketCalendarEffectiveTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}