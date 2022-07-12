<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\ExtGoodsCommissionResponse\GoodsCps;

/**
 * 批量获取商品佣金的结果
 * @author Baymax
 * @create Mon Jun 06 14:04:50 CST 2022
 */
class ExtGoodsCommissionResponse implements \JsonSerializable {

    /**
     * 商品佣金列表
     * @var array
     */
    private $goodsCpsList;



    /**
     * @return array
     */
    public function getGoodsCpsList(): ?array
    {
        return $this->goodsCpsList;
    }

    /**
     * @param array $goodsCpsList
     */
    public function setGoodsCpsList(?array $goodsCpsList): void
    {
        $this->goodsCpsList = $goodsCpsList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}