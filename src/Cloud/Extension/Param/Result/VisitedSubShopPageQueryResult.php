<?php

namespace Com\Youzan\Cloud\Extension\Param\Result;

use Com\Youzan\Cloud\Extension\Param\Chain\SubShopVisitInfo;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:51:11 CST 2022
 */
class VisitedSubShopPageQueryResult implements \JsonSerializable {

    /**
     * 买家上次访问的分店kdtId
     * @var int
     */
    private $lastVisitedKdtId;

    /**
     * 符合条件的分店总数
     * @var int
     */
    private $total;

    /**
     * 页码
     * @var int
     */
    private $pageNum;

    /**
     * 每页条数
     * @var int
     */
    private $pageSize;

    /**
     *  
     * @var array
     */
    private $data;



    /**
     * @return int
     */
    public function getLastVisitedKdtId(): ?int
    {
        return $this->lastVisitedKdtId;
    }

    /**
     * @param int $lastVisitedKdtId
     */
    public function setLastVisitedKdtId(?int $lastVisitedKdtId): void
    {
        $this->lastVisitedKdtId = $lastVisitedKdtId;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageNum
     */
    public function setPageNum(?int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return array
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}