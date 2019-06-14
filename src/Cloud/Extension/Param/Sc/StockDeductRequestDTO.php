<?php

namespace Com\Youzan\Cloud\Extension\Param\Sc;



/**
 * 
 * @author Baymax
 * @create 2019-06-14 16:36:46.0
 */
class StockDeductRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 多门店Id  可选参数
     * @var int
     */
    private $offlineId;

    /**
     * 订单id, 必填
     * @var string
     */
    private $orderNo;

    /**
     * 扣减类型 0 扣减 2 预占
     * @var int
     */
    private $deductType;

    /**
     * 子订单ID
     * @var int
     */
    private $orderItemId;

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
     * 扣库存数量
     * @var int
     */
    private $num;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getOfflineId(): int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(int $offlineId): void
    {
        $this->offlineId = $offlineId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}