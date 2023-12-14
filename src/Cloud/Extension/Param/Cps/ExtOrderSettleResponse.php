<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;



/**
 * data
 * @author Baymax
 * @create Thu Oct 19 20:18:50 CST 2023
 */
class ExtOrderSettleResponse implements \JsonSerializable {

    /**
     * 分销员订单所属的店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 触发结算的分销员订单号
     * @var string
     */
    private $orderNo;

    /**
     * 是否由定制侧自定义订单能否正常结算，true：按照定制侧返回结果处理订单结算；false：按照标品流程结算
     * @var bool
     */
    private $customOrderSettle;

    /**
     * 订单是否可以正常结算，true: 可以结算；false：不能结算
     * @var bool
     */
    private $canSettle;

    /**
     * 订单不能正常结算的原因，canSettle为false时传，商家后台手动触发“立即结算”时会展示
     * @var string
     */
    private $notSettleReason;



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
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return bool
     */
    public function getCustomOrderSettle(): ?bool
    {
        return $this->customOrderSettle;
    }

    /**
     * @param bool $customOrderSettle
     */
    public function setCustomOrderSettle(?bool $customOrderSettle): void
    {
        $this->customOrderSettle = $customOrderSettle;
    }

    /**
     * @return bool
     */
    public function getCanSettle(): ?bool
    {
        return $this->canSettle;
    }

    /**
     * @param bool $canSettle
     */
    public function setCanSettle(?bool $canSettle): void
    {
        $this->canSettle = $canSettle;
    }

    /**
     * @return string
     */
    public function getNotSettleReason(): ?string
    {
        return $this->notSettleReason;
    }

    /**
     * @param string $notSettleReason
     */
    public function setNotSettleReason(?string $notSettleReason): void
    {
        $this->notSettleReason = $notSettleReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}