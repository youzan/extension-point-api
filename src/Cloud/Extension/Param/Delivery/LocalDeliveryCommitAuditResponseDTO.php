<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:08:53.0
 */
class LocalDeliveryCommitAuditResponseDTO implements \JsonSerializable {

    /**
     * 审核结果，   1 -&gt; 审核中 ; 2 -&gt; 审核成功; 3 -&gt; 审核失败
     * @var int
     */
    private $auditResult;

    /**
     * 失败原因
     * @var string
     */
    private $fialReason;



    /**
     * @return int
     */
    public function getAuditResult(): int
    {
        return $this->auditResult;
    }

    /**
     * @param int $auditResult
     */
    public function setAuditResult(int $auditResult): void
    {
        $this->auditResult = $auditResult;
    }

    /**
     * @return string
     */
    public function getFialReason(): string
    {
        return $this->fialReason;
    }

    /**
     * @param string $fialReason
     */
    public function setFialReason(string $fialReason): void
    {
        $this->fialReason = $fialReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}