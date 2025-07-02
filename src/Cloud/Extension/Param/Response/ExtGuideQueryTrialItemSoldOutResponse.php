<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ItemSoldOutDTO;

/**
 * 结果数据
 * @author Baymax
 * @create Thu Jun 05 15:08:41 CST 2025
 */
class ExtGuideQueryTrialItemSoldOutResponse implements \JsonSerializable {

    /**
     * 商品列表
     * @var array
     */
    private $items;



    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}