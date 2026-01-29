<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 响应参数
 * @author Baymax
 * @create Wed Jan 14 15:26:18 CST 2026
 */
class RefundAgreeBizValidatorCobuildResponseDTO implements \JsonSerializable {

    /**
     * 是否同意。true同意 false不同意，false情况下，reason和code需要返回
     * @var bool
     */
    private $agree;

    /**
     * 不同意原因code
     * @var int
     */
    private $code;

    /**
     * 不同意原因
     * @var string
     */
    private $reason;



    /**
     * @return bool
     */
    public function getAgree(): ?bool
    {
        return $this->agree;
    }

    /**
     * @param bool $agree
     */
    public function setAgree(?bool $agree): void
    {
        $this->agree = $agree;
    }

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
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