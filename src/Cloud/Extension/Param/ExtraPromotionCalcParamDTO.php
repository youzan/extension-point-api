<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ItemCalcDTO;

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
     * 卖家标识
     * @var int
     */
    private $kdtId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}