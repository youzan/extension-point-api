<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 获取业绩开始统计时间相关信息结果
 * @author Baymax
 * @create Mon Dec 11 15:24:22 CST 2023
 */
class PerformanceStartInfoResponse implements \JsonSerializable {

    /**
     * 业绩开始统计时间节点；1：支付完成时间，2：发货完成时间
     * @var int
     */
    private $startSummaryTimeNode;



    /**
     * @return int
     */
    public function getStartSummaryTimeNode(): ?int
    {
        return $this->startSummaryTimeNode;
    }

    /**
     * @param int $startSummaryTimeNode
     */
    public function setStartSummaryTimeNode(?int $startSummaryTimeNode): void
    {
        $this->startSummaryTimeNode = $startSummaryTimeNode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}