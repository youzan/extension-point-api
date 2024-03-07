<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ExtPointExtraPriceResultDTO;
use Com\Youzan\Cloud\Extension\Param\ExtPointItemExtraPriceResultDTO;

/**
 * 响应信息
 * @author Baymax
 * @create Thu Jan 25 17:40:15 CST 2024
 */
class ExtraFeeCalcResultDTO implements \JsonSerializable {

    /**
     *  附加费用列表（已弃用，请传空值）
     * @var stdClass
     */
    private $extraFeeDetail;

    /**
     *  附加费用总额（已弃用，请使用orderExtraPrice字段）
     * @var int
     */
    private $totalExtraFeeAmount;

    /**
     * 订单号(回传)
     * @var string
     */
    private $orderNo;

    /**
     *  附加费用说明（已弃用，请使用orderExtraPrice字段）
     * @var string
     */
    private $extraFeeDesc;

    /**
     * 订单级额外费用 (包含在订单实付金额里面)，订单级额外费用JSON字符串限制500个字符
     * @var array
     */
    private $orderExtraPrice;

    /**
     * 商品级额外费用 (包含在商品实付金额里面，默认可退)  。如商品a原价10元、额外费用5元，则实付15元，售后申请可退15元。注意，该字段的费用明细暂不支持在下单页展示，ui交互上会有困扰，谨慎使用。
     * @var array
     */
    private $goodsExtraPrice;



    /**
     * @return stdClass
     */
    public function getExtraFeeDetail(): ?stdClass
    {
        return $this->extraFeeDetail;
    }

    /**
     * @param stdClass $extraFeeDetail
     */
    public function setExtraFeeDetail(?stdClass $extraFeeDetail): void
    {
        $this->extraFeeDetail = $extraFeeDetail;
    }

    /**
     * @return int
     */
    public function getTotalExtraFeeAmount(): ?int
    {
        return $this->totalExtraFeeAmount;
    }

    /**
     * @param int $totalExtraFeeAmount
     */
    public function setTotalExtraFeeAmount(?int $totalExtraFeeAmount): void
    {
        $this->totalExtraFeeAmount = $totalExtraFeeAmount;
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
     * @return string
     */
    public function getExtraFeeDesc(): ?string
    {
        return $this->extraFeeDesc;
    }

    /**
     * @param string $extraFeeDesc
     */
    public function setExtraFeeDesc(?string $extraFeeDesc): void
    {
        $this->extraFeeDesc = $extraFeeDesc;
    }

    /**
     * @return array
     */
    public function getOrderExtraPrice(): ?array
    {
        return $this->orderExtraPrice;
    }

    /**
     * @param array $orderExtraPrice
     */
    public function setOrderExtraPrice(?array $orderExtraPrice): void
    {
        $this->orderExtraPrice = $orderExtraPrice;
    }

    /**
     * @return array
     */
    public function getGoodsExtraPrice(): ?array
    {
        return $this->goodsExtraPrice;
    }

    /**
     * @param array $goodsExtraPrice
     */
    public function setGoodsExtraPrice(?array $goodsExtraPrice): void
    {
        $this->goodsExtraPrice = $goodsExtraPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}