<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 订单详情自定义数据返回结果
 * @author Baymax
 * @create 2018-09-14 18:01:22.0
 */
class OrderDetailSelfDefineBlockResultDTO implements \JsonSerializable {

    /**
     * 自定义区块数据结构
     * @var stdClass
     */
    private $selfDefineBlockData;



    /**
     * @return stdClass
     */
    public function getSelfDefineBlockData(): stdClass
    {
        return $this->selfDefineBlockData;
    }

    /**
     * @param stdClass $selfDefineBlockData
     */
    public function setSelfDefineBlockData(stdClass $selfDefineBlockData): void
    {
        $this->selfDefineBlockData = $selfDefineBlockData;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}