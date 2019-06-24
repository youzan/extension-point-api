<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create 2018-11-04 21:41:34.0
 */
class ExtCustomerPointsLogQueryDTO implements \JsonSerializable {

    /**
     * 单页条数，限制50
     * @var int
     */
    private $pageSize;

    /**
     * 页码
     * @var int
     */
    private $page;

    /**
     * 帐号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;



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
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}