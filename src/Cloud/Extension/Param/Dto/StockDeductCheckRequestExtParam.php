<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductCheckExtParam;

/**
 * 请求参数request
 * @author Baymax
 * @create Wed Mar 02 15:26:08 CST 2022
 */
class StockDeductCheckRequestExtParam implements \JsonSerializable {

    /**
     * 库存扣减参数Param
     * @var StockDeductCheckExtParam
     */
    private $extCheckParam;



    /**
     * @return StockDeductCheckExtParam
     */
    public function getExtCheckParam(): ?StockDeductCheckExtParam
    {
        return $this->extCheckParam;
    }

    /**
     * @param StockDeductCheckExtParam $extCheckParam
     */
    public function setExtCheckParam(?StockDeductCheckExtParam $extCheckParam): void
    {
        $this->extCheckParam = $extCheckParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}