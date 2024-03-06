<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductCheckDetailExtParam;

/**
 * 库存扣减参数Param
 * @author Baymax
 * @create Wed Mar 02 15:26:08 CST 2022
 */
class StockDeductCheckExtParam implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 网店ID
     * @var int
     */
    private $nodeKdtId;

    /**
     * 库存扣减详情参数Pram
     * @var array
     */
    private $detailParamList;

    /**
     * 订单号
     * @var string
     */
    private $tid;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return array
     */
    public function getDetailParamList(): ?array
    {
        return $this->detailParamList;
    }

    /**
     * @param array $detailParamList
     */
    public function setDetailParamList(?array $detailParamList): void
    {
        $this->detailParamList = $detailParamList;
    }

    /**
     * @return string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(?string $tid): void
    {
        $this->tid = $tid;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}