<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\VlaueCardExtBillRecordDTO;

/**
 * 卡列表
 * @author Baymax
 * @create 2020-01-06 11:40:30.0
 */
class CustomerExtBillRecordQueryResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $valueCardBillRecords;

    /**
     * 总条数
     * @var int
     */
    private $totalNum;



    /**
     * @return array
     */
    public function getValueCardBillRecords(): ?array
    {
        return $this->valueCardBillRecords;
    }

    /**
     * @param array $valueCardBillRecords
     */
    public function setValueCardBillRecords(?array $valueCardBillRecords): void
    {
        $this->valueCardBillRecords = $valueCardBillRecords;
    }

    /**
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * @param int $totalNum
     */
    public function setTotalNum(?int $totalNum): void
    {
        $this->totalNum = $totalNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}