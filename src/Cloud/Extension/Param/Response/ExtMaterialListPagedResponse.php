<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\Paginator;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialResponse;

/**
 * 结果数据
 * @author Baymax
 * @create Tue May 20 19:40:16 CST 2025
 */
class ExtMaterialListPagedResponse implements \JsonSerializable {

    /**
     * 分页数据
     * @var Paginator
     */
    private $paginator;

    /**
     * 素材列表
     * @var array
     */
    private $items;



    /**
     * @return Paginator
     */
    public function getPaginator(): ?Paginator
    {
        return $this->paginator;
    }

    /**
     * @param Paginator $paginator
     */
    public function setPaginator(?Paginator $paginator): void
    {
        $this->paginator = $paginator;
    }

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