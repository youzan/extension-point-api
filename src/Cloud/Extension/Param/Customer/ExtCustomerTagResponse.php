<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;

use Com\Youzan\Cloud\Extension\Param\Response\Paginator;
use Com\Youzan\Cloud\Extension\Param\Tag\ExtCustomerTagDTO;

/**
 * 结果数据
 * @author Baymax
 * @create Thu Aug 24 18:49:09 CST 2023
 */
class ExtCustomerTagResponse implements \JsonSerializable {

    /**
     * 分页数据
     * @var Paginator
     */
    private $paginator;

    /**
     * 标签组列表
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