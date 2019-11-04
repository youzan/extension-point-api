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
     * 失败原因ID 1 -&gt; 运力不足,暂无法提供服务; 2 -&gt; 超出物流商服务范围; 3 -&gt; 店铺不存在; 4 -&gt; 门店地址信息不准确; 5 -&gt; 品类不明确,不支持上线; 6 -&gt; 所提交品类与实际经营品类不符
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