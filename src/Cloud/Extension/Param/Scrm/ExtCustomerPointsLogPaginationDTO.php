<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsLogDTO;

/**
 * 响应参数
 * @author Baymax
 * @create Mon Jul 17 15:01:03 CST 2023
 */
class ExtCustomerPointsLogPaginationDTO implements \JsonSerializable {

    /**
     * 积分变动日志列表
     * @var array
     */
    private $logDTOList;

    /**
     * 积分变动总数
     * @var int
     */
    private $total;



    /**
     * @return array
     */
    public function getLogDTOList(): ?array
    {
        return $this->logDTOList;
    }

    /**
     * @param array $logDTOList
     */
    public function setLogDTOList(?array $logDTOList): void
    {
        $this->logDTOList = $logDTOList;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}