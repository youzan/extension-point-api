<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ItemCalcDTO;
use Com\Youzan\Cloud\Extension\Param\ExtPointUserMsgDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 20:26:05.0
 */
class ExtraPromotionCalcParamDTO implements \JsonSerializable {

    /**
     * 自定义优惠相关带入数据
     * @var stdClass
     */
    private $selfDefinePromotionData;

    /**
     * 商品信息
     * @var array
     */
    private $itemCalcDTOs;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 商品现价格之和：商品价格列表中totalPrice之和
     * @var int
     */
    private $itemsPrice;

    /**
     * 优惠后的邮费价格
     * @var int
     */
    private $postage;

    /**
     * 订单总价&#x3D;商品总价+当前邮费价格+额外费用
     * @var int
     */
    private $totalPrice;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 买家信息
     * @var ExtPointUserMsgDTO
     */
    private $buyerInfo;



    /**
     * @return stdClass
     */
    public function getSelfDefinePromotionData(): stdClass
    {
        return $this->selfDefinePromotionData;
    }

    /**
     * @param stdClass $selfDefinePromotionData
     */
    public function setSelfDefinePromotionData(stdClass $selfDefinePromotionData): void
    {
        $this->selfDefinePromotionData = $selfDefinePromotionData;
    }

    /**
     * @return array
     */
    public function getItemCalcDTOs(): array
    {
        return $this->itemCalcDTOs;
    }

    /**
     * @param array $itemCalcDTOs
     */
    public function setItemCalcDTOs(array $itemCalcDTOs): void
    {
        $this->itemCalcDTOs = $itemCalcDTOs;
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
    public function getItemsPrice(): int
    {
        return $this->itemsPrice;
    }

    /**
     * @param int $itemsPrice
     */
    public function setItemsPrice(int $itemsPrice): void
    {
        $this->itemsPrice = $itemsPrice;
    }

    /**
     * @return int
     */
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

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
     * @return ExtPointUserMsgDTO
     */
    public function getBuyerInfo(): ExtPointUserMsgDTO
    {
        return $this->buyerInfo;
    }

    /**
     * @param ExtPointUserMsgDTO $buyerInfo
     */
    public function setBuyerInfo(ExtPointUserMsgDTO $buyerInfo): void
    {
        $this->buyerInfo = $buyerInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}