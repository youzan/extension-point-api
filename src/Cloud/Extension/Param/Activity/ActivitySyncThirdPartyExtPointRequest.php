<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use StdClass;

/**
 * 请求
 * @author Baymax
 * @create 2021-07-07 11:55:49.0
 */
class ActivitySyncThirdPartyExtPointRequest implements \JsonSerializable {

    /**
     * 优惠券活动创建店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 7：优惠券 9：共享码 10：一卡一码 11:社区团购券 13: 兑换券2.0
     * @var int
     */
    private $activityType;

    /**
     * 外部平台类型0:通用平台 1:三方平台 3:scrm平台
     * @var int
     */
    private $externalPlatformType;

    /**
     * 优惠方式      * 1：代金券（面额：denominations）随机代金券[valueRandomTo&amp;gt;0]（denominations~valueRandomTo） (默认值)      * 2：折扣券（折扣：discount/10）      * 3：兑换券（面额：denominations &#x3D; 0）
     * @var int
     */
    private $preferentialMode;

    /**
     * /**      * 面额生成规则类型      * * 1:固定值 &#x3D;&#x3D;&amp;gt;   value字段 （默认值）      * * 2:指定值 &#x3D;&#x3D;&amp;gt;   指定范围为minValue ~ maxValue之间      * * 3:范围随机 &#x3D;&#x3D;&amp;gt; 随机范围为minValue ~ maxValue之间      * * 4:无指定值(例如：兑换券) &#x3D;&#x3D;&amp;gt; value &#x3D;&#x3D; 0      */
     * @var int
     */
    private $voucherValueGenerateType;

    /**
     * 核销渠道范围类型    0:不限制     1:范围内可用   2:范围内不可用
     * @var int
     */
    private $verifyChannelRangeType;

    /**
     * 适用的核销渠道列表
     * @var array
     */
    private $applicableVerifyChannels;

    /**
     * 
     * @var int
     */
    private $versionNo;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     */
    public function setActivityType(?int $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return int
     */
    public function getExternalPlatformType(): ?int
    {
        return $this->externalPlatformType;
    }

    /**
     * @param int $externalPlatformType
     */
    public function setExternalPlatformType(?int $externalPlatformType): void
    {
        $this->externalPlatformType = $externalPlatformType;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): ?int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(?int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return int
     */
    public function getVoucherValueGenerateType(): ?int
    {
        return $this->voucherValueGenerateType;
    }

    /**
     * @param int $voucherValueGenerateType
     */
    public function setVoucherValueGenerateType(?int $voucherValueGenerateType): void
    {
        $this->voucherValueGenerateType = $voucherValueGenerateType;
    }

    /**
     * @return int
     */
    public function getVerifyChannelRangeType(): ?int
    {
        return $this->verifyChannelRangeType;
    }

    /**
     * @param int $verifyChannelRangeType
     */
    public function setVerifyChannelRangeType(?int $verifyChannelRangeType): void
    {
        $this->verifyChannelRangeType = $verifyChannelRangeType;
    }

    /**
     * @return array
     */
    public function getApplicableVerifyChannels(): ?array
    {
        return $this->applicableVerifyChannels;
    }

    /**
     * @param array $applicableVerifyChannels
     */
    public function setApplicableVerifyChannels(?array $applicableVerifyChannels): void
    {
        $this->applicableVerifyChannels = $applicableVerifyChannels;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}