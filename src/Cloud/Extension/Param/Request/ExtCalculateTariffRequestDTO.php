<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCalculateTariffOrderItemRequestDTO;

/**
 * 入参
 * @author Baymax
 * @create 2020-12-24 11:30:20.0
 */
class ExtCalculateTariffRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 订单no
     * @var string
     */
    private $orderNo;

    /**
     * 商品列表
     * @var array
     */
    private $itemList;

    /**
     * 运费，单位是分
     * @var array
     */
    private $postage;



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
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    /**
     * @return array
     */
    public function getPostage(): ?array
    {
        return $this->postage;
    }

    /**
     * @param array $postage
     */
    public function setPostage(?array $postage): void
    {
        $this->postage = $postage;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}