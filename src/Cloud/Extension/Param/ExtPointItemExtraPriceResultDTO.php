<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\ExtPointExtraPriceResultDTO;

/**
 * 商品级额外费用 (包含在商品实付金额里面，默认可退)  。如商品a原价10元、额外费用5元，则实付15元，售后申请可退15元。注意，该字段的费用明细暂不支持在下单页展示，ui交互上会有困扰，谨慎使用。
 * @author Baymax
 * @create Thu Jan 25 17:40:18 CST 2024
 */
class ExtPointItemExtraPriceResultDTO implements \JsonSerializable {

    /**
     * 商品条目id
     * @var int
     */
    private $orderItemId;

    /**
     * 额外费用项明细
     * @var array
     */
    private $extraPriceList;



    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return array
     */
    public function getExtraPriceList(): ?array
    {
        return $this->extraPriceList;
    }

    /**
     * @param array $extraPriceList
     */
    public function setExtraPriceList(?array $extraPriceList): void
    {
        $this->extraPriceList = $extraPriceList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}