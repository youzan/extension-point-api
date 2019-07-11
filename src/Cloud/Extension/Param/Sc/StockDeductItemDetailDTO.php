<?php

namespace Com\Youzan\Cloud\Extension\Param\Sc;



/**
 * 商品明细
 * @author Baymax
 * @create 2019-07-11 11:32:37.0
 */
class StockDeductItemDetailDTO implements \JsonSerializable {

    /**
     * 子订单ID
     * @var int
     */
    private $subOrderId;

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * sku Id
     * @var int
     */
    private $skuId;

    /**
     * 外部商品编码
     * @var string
     */
    private $outsideSkuCode;

    /**
     * 扣库存数量
     * @var int
     */
    private $num;

    /**
     * 扣减类型 0 扣减 2 预占
     * @var int
     */
    private $deductType;

    /**
     * 扣减场景 0 下单扣库存 1支付扣库存
     * @var int
     */
    private $deductScene;



    /**
     * @return int
     */
    public function getSubOrderId(): int
    {
        return $this->subOrderId;
    }

    /**
     * @param int $subOrderId
     */
    public function setSubOrderId(int $subOrderId): void
    {
        $this->subOrderId = $subOrderId;
    }

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
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
     * @return string
     */
    public function getOutsideSkuCode(): string
    {
        return $this->outsideSkuCode;
    }

    /**
     * @param string $outsideSkuCode
     */
    public function setOutsideSkuCode(string $outsideSkuCode): void
    {
        $this->outsideSkuCode = $outsideSkuCode;
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
    public function getDeductType(): int
    {
        return $this->deductType;
    }

    /**
     * @param int $deductType
     */
    public function setDeductType(int $deductType): void
    {
        $this->deductType = $deductType;
    }

    /**
     * @return int
     */
    public function getDeductScene(): int
    {
        return $this->deductScene;
    }

    /**
     * @param int $deductScene
     */
    public function setDeductScene(int $deductScene): void
    {
        $this->deductScene = $deductScene;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}