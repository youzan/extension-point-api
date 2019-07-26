<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\QueryTimeCondition;

/**
 * 
 * @author Baymax
 * @create 2019-07-25 14:17:34.0
 */
class PaginatorParamDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $pageSize;

    /**
     * 
     * @var int
     */
    private $pageNo;

    /**
     * 
     * @var QueryTimeCondition
     */
    private $queryCondition;



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
     * @return int
     */
    public function getPageNo(): int
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo(int $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return QueryTimeCondition
     */
    public function getQueryCondition(): QueryTimeCondition
    {
        return $this->queryCondition;
    }

    /**
     * @param QueryTimeCondition $queryCondition
     */
    public function setQueryCondition(QueryTimeCondition $queryCondition): void
    {
        $this->queryCondition = $queryCondition;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}