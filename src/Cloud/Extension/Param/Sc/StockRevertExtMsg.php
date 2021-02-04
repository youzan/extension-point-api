<?php

namespace Com\Youzan\Cloud\Extension\Param\Sc;

use Com\Youzan\Cloud\Extension\Param\Sc\StockRevertItemDetailDTO;

/**
 * 
 * @author Baymax
 * @create 2019-06-19 17:51:28.0
 */
class StockRevertExtMsg implements \JsonSerializable {

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
    private $detailParamList;



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
     * @return int
     */
    public function getOfflineId(): ?int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(?int $offlineId): void
    {
        $this->offlineId = $offlineId;
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
     * @return array
     */
    public function getDetailParamList(): ?array
    {
        return $this->detailParamList;
    }

    /**
     * @param array $detailParamList
     */
    public function setDetailParamList(?array $detailParamList): void
    {
        $this->detailParamList = $detailParamList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}