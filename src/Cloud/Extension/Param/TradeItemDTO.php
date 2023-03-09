<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 交易条目
 * @author Baymax
 * @create Thu Dec 08 11:03:38 CST 2022
 */
class TradeItemDTO implements \JsonSerializable {

    /**
     * sku复合Id
     * @var SkuCompositeId
     */
    private $skuCompositeId;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品类型，0:普通类型商品；1:拍卖商品；5:餐饮商品；10:分销商品；20:会员卡商品；21:礼品卡商品；23:有赞会议商品；24:周期购；30:收银台商品；31:知识付费商品；35:酒店商品；40:普通服务类商品；71:卡项商品；182:普通虚拟商品；183:电子卡券商品；184:混合类型；201:外部会员卡商品；202:外部直接收款商品；203:外部普通商品；204:外部服务商品；206:小程序二维码；207:积分充值商品；208:付费优惠券商品
     * @var int
     */
    private $goodsType;

    /**
     * 买家填写的商品留言
     * @var string
     */
    private $memo;

    /**
     * 价格日历中选择的日期
     * @var string
     */
    private $ticketCalendarEffectiveTime;

    /**
     * 商品编码
     * @var string
     */
    private $itemNo;

    /**
     * 规格编码
     * @var string
     */
    private $skuNo;



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

    /**
     * @return string
     */
    public function getItemNo(): ?string
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo(?string $itemNo): void
    {
        $this->itemNo = $itemNo;
    }

    /**
     * @return string
     */
    public function getSkuNo(): ?string
    {
        return $this->skuNo;
    }

    /**
     * @param string $skuNo
     */
    public function setSkuNo(?string $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}