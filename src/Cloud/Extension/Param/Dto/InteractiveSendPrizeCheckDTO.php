<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 响应结果
 * @author Baymax
 * @create Mon Apr 14 15:40:54 CST 2025
 */
class InteractiveSendPrizeCheckDTO implements \JsonSerializable {

    /**
     * 校验结果 true-校验通过，当前奖品可以发奖 false-校验失败，当前奖品不发奖
     * @var bool
     */
    private $result;

    /**
     * 原因 校验失败需要传入 如库存不足
     * @var string
     */
    private $reason;

    /**
     * 响应码，可以不传，目前仅会处理库存不足的场景 0-成功 1-失败 2-库存不足 
     * @var int
     */
    private $businessCode;



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

    /**
     * @return int
     */
    public function getBusinessCode(): ?int
    {
        return $this->businessCode;
    }

    /**
     * @param int $businessCode
     */
    public function setBusinessCode(?int $businessCode): void
    {
        $this->businessCode = $businessCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}