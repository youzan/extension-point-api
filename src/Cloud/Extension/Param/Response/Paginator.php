<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 分页对象
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class Paginator implements \JsonSerializable {

    /**
     * 当前页码
     * @var int
     */
    private $page;

    /**
     * 每页展示条数
     * @var int
     */
    private $pageSize;

    /**
     * 总条数
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