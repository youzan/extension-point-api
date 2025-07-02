<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialGroupListResponse;

/**
 *  结果数据
 * @author Baymax
 * @create Tue May 13 17:29:07 CST 2025
 */
class ExtMaterialGroupListDTO implements \JsonSerializable {

    /**
     * 素材分组列表
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