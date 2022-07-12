<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardBalanceDTO;

/**
 * 响应参数
 * @author Baymax
 * @create Thu Feb 10 13:06:13 CST 2022
 */
class QueryValueCardBalanceResponseDTO implements \JsonSerializable {

    /**
     * 储值卡详情
     * @var array
     */
    private $valueCardExtDTOS;



    /**
     * @return array
     */
    public function getValueCardExtDTOS(): ?array
    {
        return $this->valueCardExtDTOS;
    }

    /**
     * @param array $valueCardExtDTOS
     */
    public function setValueCardExtDTOS(?array $valueCardExtDTOS): void
    {
        $this->valueCardExtDTOS = $valueCardExtDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}