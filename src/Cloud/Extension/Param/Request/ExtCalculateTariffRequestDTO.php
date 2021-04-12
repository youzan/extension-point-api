<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCalculateTariffOrderItemRequestDTO;

/**
 * 税费计算扩展点入参
 * @author Baymax
 * @create 2020-12-24 11:30:20.0
 */
class ExtCalculateTariffRequestDTO implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
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
     * @var int
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
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}