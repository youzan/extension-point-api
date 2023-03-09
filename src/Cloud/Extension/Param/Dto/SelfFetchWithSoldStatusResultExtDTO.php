<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchPointInfoExtDTO;

/**
 * 第一层返回结果封装data对象
 * @author Baymax
 * @create Thu Oct 13 15:35:19 CST 2022
 */
class SelfFetchWithSoldStatusResultExtDTO implements \JsonSerializable {

    /**
     * 查询到的自提点列表数据
     * @var array
     */
    private $allSelfFetchPointInfo;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}