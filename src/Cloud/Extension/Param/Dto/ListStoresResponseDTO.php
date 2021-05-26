<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Response\Paginator;
use Com\Youzan\Cloud\Extension\Param\Dto\MultiStoreExtDTO;

/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class ListStoresResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var Paginator
     */
    private $paginator;

    /**
     * 
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