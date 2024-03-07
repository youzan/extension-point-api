<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 库存扣减检查响应参数
 * @author Baymax
 * @create Wed Mar 02 15:24:17 CST 2022
 */
class StockDeductCheckExtResponse implements \JsonSerializable {

    /**
     * 库存扣减检查结果(无实际意义，库存不校验)
     * @var string
     */
    private $result;



    /**
     * @return string
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult(?string $result): void
    {
        $this->result = $result;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}