<?php

namespace Com\Youzan\Cloud\Extension\Param\Result;

use Com\Youzan\Cloud\Extension\Param\Chain\SubShopVisitInfo;

/**
 * 
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class VisitedSubShopPageQueryResult implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $lastVisitedKdtId;

    /**
     * 
     * @var int
     */
    private $total;

    /**
     * 
     * @var int
     */
    private $pageNum;

    /**
     * 
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
    public function getLastVisitedKdtId(): int
    {
        return $this->lastVisitedKdtId;
    }

    /**
     * @param int $lastVisitedKdtId
     */
    public function setLastVisitedKdtId(int $lastVisitedKdtId): void
    {
        $this->lastVisitedKdtId = $lastVisitedKdtId;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getPageNum(): int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageNum
     */
    public function setPageNum(int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}