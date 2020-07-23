<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ItemCalcDTO;
use Com\Youzan\Cloud\Extension\Param\ExtPointUserMsgDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 11:32:37.0
 */
class ExtraFeeCalcParamDTO implements \JsonSerializable {

    /**
     * 自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

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
     * 商户店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 买家信息
     * @var ExtPointUserMsgDTO
     */
    private $extPointUserDTO;

    /**
     * 配送方式
     * @var int
     */
    private $logisticsType;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
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

    /**
     * @return ExtPointUserMsgDTO
     */
    public function getExtPointUserDTO(): ExtPointUserMsgDTO
    {
        return $this->extPointUserDTO;
    }

    /**
     * @param ExtPointUserMsgDTO $extPointUserDTO
     */
    public function setExtPointUserDTO(ExtPointUserMsgDTO $extPointUserDTO): void
    {
        $this->extPointUserDTO = $extPointUserDTO;
    }

    /**
     * @return int
     */
    public function getLogisticsType(): int
    {
        return $this->logisticsType;
    }

    /**
     * @param int $logisticsType
     */
    public function setLogisticsType(int $logisticsType): void
    {
        $this->logisticsType = $logisticsType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}