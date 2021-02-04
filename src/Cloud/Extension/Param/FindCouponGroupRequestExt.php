<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 请求参数
 * @author Baymax
 * @create Wed Sep 26 19:40:59 CST 2018
 */
class FindCouponGroupRequestExt implements \JsonSerializable {

    /**
     * 活动状态：0.全部 1.未开始 2.进行中 3.已结束
     * @var int
     */
    private $status;

    /**
     * 页码
     * @var int
     */
    private $pageNo;

    /**
     * 每页数量
     * @var int
     */
    private $pageSize;



    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}