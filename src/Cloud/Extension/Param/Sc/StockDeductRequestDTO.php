<?php

namespace Com\Youzan\Cloud\Extension\Param\Sc;

use Com\Youzan\Cloud\Extension\Param\Sc\StockDeductItemDetailDTO;

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
     * 商品明细
     * @var array
     */
    private $itemList;



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
     * @return array
     */
    public function getItemList(): array
    {
        return $this->itemList;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(array $itemList): void
    {
        $this->itemList = $itemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}