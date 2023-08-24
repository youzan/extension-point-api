<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;



/**
 * 响应参数
 * @author Baymax
 * @create Thu Aug 17 21:27:15 CST 2023
 */
class ExtOrderAttributionDirectlyResponse implements \JsonSerializable {

    /**
     * 是否以扩展点返回归因结果为准，如为false则走分销员正常归因逻辑
     * @var bool
     */
    private $customAttribution;

    /**
     * 是否分销员订单，如为true则必须返回合法的分销员（openId或mobile二选一）
     * @var bool
     */
    private $isSalesmanOrder;

    /**
     * 订单归属的分销员openId（openId和mobile可二选一，如果都返回以openId为准）
     * @var string
     */
    private $dsOpenId;

    /**
     * 订单归属的分销员手机号（openId和mobile可二选一，如果都返回以openId为准）
     * @var string
     */
    private $mobile;



    /**
     * @return bool
     */
    public function getCustomAttribution(): ?bool
    {
        return $this->customAttribution;
    }

    /**
     * @param bool $customAttribution
     */
    public function setCustomAttribution(?bool $customAttribution): void
    {
        $this->customAttribution = $customAttribution;
    }

    /**
     * @return bool
     */
    public function getIsSalesmanOrder(): ?bool
    {
        return $this->isSalesmanOrder;
    }

    /**
     * @param bool $isSalesmanOrder
     */
    public function setIsSalesmanOrder(?bool $isSalesmanOrder): void
    {
        $this->isSalesmanOrder = $isSalesmanOrder;
    }

    /**
     * @return string
     */
    public function getDsOpenId(): ?string
    {
        return $this->dsOpenId;
    }

    /**
     * @param string $dsOpenId
     */
    public function setDsOpenId(?string $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}