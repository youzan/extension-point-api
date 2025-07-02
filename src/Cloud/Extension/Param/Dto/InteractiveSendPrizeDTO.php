<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 响应结果
 * @author Baymax
 * @create Mon Apr 14 15:40:44 CST 2025
 */
class InteractiveSendPrizeDTO implements \JsonSerializable {

    /**
     * 发奖结果 true--发奖成功 false--发奖失败
     * @var bool
     */
    private $result;

    /**
     * 原因  发奖失败需要传入原因，如库存不足
     * @var string
     */
    private $reason;



    /**
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     */
    public function setResult(?bool $result): void
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}