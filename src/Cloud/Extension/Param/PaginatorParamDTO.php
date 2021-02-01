<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\QueryTimeConditionParamDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-21 19:05:25.0
 */
class PaginatorParamDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

    /**
     * 每页数量
     * @var int
     */
    private $pageSize;

    /**
     * 页码
     * @var int
     */
    private $pageNo;

    /**
     * 时间参数
     * @var QueryTimeConditionParamDTO
     */
    private $queryCondition;



    /**
     * @return stdClass
     */
    public function getAuthMap(): ?stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(?stdClass $authMap): void
    {
        $this->authMap = $authMap;
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
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo(?int $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return QueryTimeConditionParamDTO
     */
    public function getQueryCondition(): ?QueryTimeConditionParamDTO
    {
        return $this->queryCondition;
    }

    /**
     * @param QueryTimeConditionParamDTO $queryCondition
     */
    public function setQueryCondition(?QueryTimeConditionParamDTO $queryCondition): void
    {
        $this->queryCondition = $queryCondition;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}