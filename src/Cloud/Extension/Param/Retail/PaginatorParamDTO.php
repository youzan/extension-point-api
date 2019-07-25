<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}