<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:08:53.0
 */
class LocalDeliveryCommitAuditResponseDTO implements \JsonSerializable {

    /**
     * 审核结果，   1 -&amp;gt; 审核中 ; 2 -&amp;gt; 审核成功; 3 -&amp;gt; 审核失败
     * @var int
     */
    private $auditResult;

    /**
     * 失败code值  1:运力不足,暂无法提供服务;2:超出物流商服务范围;3:门店地址信息不准确;4:品类不明确,不支持上线;5:所提交品类与实际经营品类不符;6,您的店铺未完成与服务商账号的绑定，请前往&quot;应用市场-去使用&quot;绑定;1000:其它原因
     * @var int
     */
    private $code;

    /**
     * 失败原因
     * @var string
     */
    private $failReason;



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
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getFailReason(): string
    {
        return $this->failReason;
    }

    /**
     * @param string $failReason
     */
    public function setFailReason(string $failReason): void
    {
        $this->failReason = $failReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}