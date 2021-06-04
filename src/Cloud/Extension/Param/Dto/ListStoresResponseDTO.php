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
     * 分页
     * @var Paginator
     */
    private $paginator;

    /**
     * 网点列表详情
     * @var array
     */
    private $offline_list;



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
    public function getOffline_list(): ?array
    {
        return $this->offline_list;
    }

    /**
     * @param array $offline_list
     */
    public function setOffline_list(?array $offline_list): void
    {
        $this->offline_list = $offline_list;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}