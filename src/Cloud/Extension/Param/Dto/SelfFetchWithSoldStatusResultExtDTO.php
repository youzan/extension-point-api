<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchPointInfoExtDTO;

/**
 * 第一层返回结果封装data对象
 * @author Baymax
 * @create Thu Jul 20 19:27:26 CST 2023
 */
class SelfFetchWithSoldStatusResultExtDTO implements \JsonSerializable {

    /**
     * 查询到的自提点列表数据
     * @var array
     */
    private $allSelfFetchPointInfo;

    /**
     * 自提点总数
     * @var int
     */
    private $total;



    /**
     * @return array
     */
    public function getAllSelfFetchPointInfo(): ?array
    {
        return $this->allSelfFetchPointInfo;
    }

    /**
     * @param array $allSelfFetchPointInfo
     */
    public function setAllSelfFetchPointInfo(?array $allSelfFetchPointInfo): void
    {
        $this->allSelfFetchPointInfo = $allSelfFetchPointInfo;
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