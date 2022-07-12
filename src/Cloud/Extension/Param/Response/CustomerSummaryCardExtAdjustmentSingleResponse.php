<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 调账响应结果
 * @author Baymax
 * @create Thu Mar 03 12:09:55 CST 2022
 */
class CustomerSummaryCardExtAdjustmentSingleResponse implements \JsonSerializable {

    /**
     * 调账是否成功
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}