<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\RefundableAmountDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-09 10:05:17.0
 */
class RefundableAmoutCalcResultDTO implements \JsonSerializable {

    /**
     * 商品的可退金额, key是itemId, value是商品的可退金额
     * @var stdClass
     */
    private $itemRefundableAmoutMap;

    /**
     * 退款计算结果
     * @var RefundableAmountDTO
     */
    private $refundableAmountDTO;



    /**
     * @return stdClass
     */
    public function getItemRefundableAmoutMap(): stdClass
    {
        return $this->itemRefundableAmoutMap;
    }

    /**
     * @param stdClass $itemRefundableAmoutMap
     */
    public function setItemRefundableAmoutMap(stdClass $itemRefundableAmoutMap): void
    {
        $this->itemRefundableAmoutMap = $itemRefundableAmoutMap;
    }

    /**
     * @return RefundableAmountDTO
     */
    public function getRefundableAmountDTO(): RefundableAmountDTO
    {
        return $this->refundableAmountDTO;
    }

    /**
     * @param RefundableAmountDTO $refundableAmountDTO
     */
    public function setRefundableAmountDTO(RefundableAmountDTO $refundableAmountDTO): void
    {
        $this->refundableAmountDTO = $refundableAmountDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}