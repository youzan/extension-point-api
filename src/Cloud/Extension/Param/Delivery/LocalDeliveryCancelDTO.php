<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 18:20:05.0
 */
class LocalDeliveryCancelDTO implements \JsonSerializable {

    /**
     * 取消原因ID 1 -&amp;gt; 订单长时间未分配骑手; 2 -&amp;gt; 分配骑手后，骑手长时间未取; 3 -&amp;gt; 骑手告知不配送，让取消订单; 4 -&amp;gt; 商品缺货/无法出货/已售完; 5 -&amp;gt; 商户联系不上门店/门店关门了; 6 -&amp;gt; 商户发错单; 7 -&amp;gt; 商户/顾客自身定位错误; 8 -&amp;gt; 商户改其他第三方配送; 9 -&amp;gt; 顾客取消; 1000 -&amp;gt; 其他原因
     * @var int
     */
    private $cancelReasonId;

    /**
     * 取消原因(当取消原因ID为其他时，此字段必填)
     * @var string
     */
    private $cancelReason;

    /**
     * 有赞物流订单号
     * @var string
     */
    private $orderOriginalId;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getCancelReasonId(): ?int
    {
        return $this->cancelReasonId;
    }

    /**
     * @param int $cancelReasonId
     */
    public function setCancelReasonId(?int $cancelReasonId): void
    {
        $this->cancelReasonId = $cancelReasonId;
    }

    /**
     * @return string
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * @param string $cancelReason
     */
    public function setCancelReason(?string $cancelReason): void
    {
        $this->cancelReason = $cancelReason;
    }

    /**
     * @return string
     */
    public function getOrderOriginalId(): ?string
    {
        return $this->orderOriginalId;
    }

    /**
     * @param string $orderOriginalId
     */
    public function setOrderOriginalId(?string $orderOriginalId): void
    {
        $this->orderOriginalId = $orderOriginalId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}