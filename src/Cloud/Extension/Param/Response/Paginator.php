<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 分页数据
 * @author Baymax
 * @create Thu Aug 24 18:49:09 CST 2023
 */
class Paginator implements \JsonSerializable {

    /**
     * 页码，从1开始
     * @var int
     */
    private $page;

    /**
     * 单页查询数据量，范围1-50
     * @var int
     */
    private $pageSize;

    /**
     * 总数据量
     * @var int
     */
    private $totalCount;



    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
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
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}