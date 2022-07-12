<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ItemCalcDTO;
use Com\Youzan\Cloud\Extension\Param\ExtPointUserMsgDTO;

/**
 * 附加优惠请求
 * @author Baymax
 * @create Wed Feb 23 17:15:19 CST 2022
 */
class ExtraFeeCalcParamDTO implements \JsonSerializable {

    /**
     * 扩展字段，自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

    /**
     * 商品信息
     * @var array
     */
    private $itemCalcDTOs;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 买家信息
     * @var ExtPointUserMsgDTO
     */
    private $extPointUserDTO;

    /**
     * 配送方式 0 - 快递 1 - 自提 2 -  商家配送
     * @var int
     */
    private $logisticsType;

    /**
     * 是否采购单
     * @var bool
     */
    private $purchaseOrder;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): ?stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(?stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
    }

    /**
     * @return array
     */
    public function getItemCalcDTOs(): ?array
    {
        return $this->itemCalcDTOs;
    }

    /**
     * @param array $itemCalcDTOs
     */
    public function setItemCalcDTOs(?array $itemCalcDTOs): void
    {
        $this->itemCalcDTOs = $itemCalcDTOs;
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
     * @return ExtPointUserMsgDTO
     */
    public function getExtPointUserDTO(): ?ExtPointUserMsgDTO
    {
        return $this->extPointUserDTO;
    }

    /**
     * @param ExtPointUserMsgDTO $extPointUserDTO
     */
    public function setExtPointUserDTO(?ExtPointUserMsgDTO $extPointUserDTO): void
    {
        $this->extPointUserDTO = $extPointUserDTO;
    }

    /**
     * @return int
     */
    public function getLogisticsType(): ?int
    {
        return $this->logisticsType;
    }

    /**
     * @param int $logisticsType
     */
    public function setLogisticsType(?int $logisticsType): void
    {
        $this->logisticsType = $logisticsType;
    }

    /**
     * @return bool
     */
    public function getPurchaseOrder(): ?bool
    {
        return $this->purchaseOrder;
    }

    /**
     * @param bool $purchaseOrder
     */
    public function setPurchaseOrder(?bool $purchaseOrder): void
    {
        $this->purchaseOrder = $purchaseOrder;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}