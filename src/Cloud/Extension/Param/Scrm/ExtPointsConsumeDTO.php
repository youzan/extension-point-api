<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;
use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create Wed Nov 29 14:19:27 CST 2023
 */
class ExtPointsConsumeDTO implements \JsonSerializable {

    /**
     * 帐号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;

    /**
     * 业务唯一标识
     * @var string
     */
    private $bizValue;

    /**
     * 积分消耗描述
     * @var string
     */
    private $description;

    /**
     * 积分消耗来源，300：积分商城；301：积分抵扣 401, &quot;退款&quot;；402,&quot;营销逆向退积分&quot;
     * @var int
     */
    private $consumeSource;

    /**
     * 积分消耗类型，100：积分商城；102：积分抵现
     * @var int
     */
    private $consumeType;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 总部id
     * @var int
     */
    private $kdtId;

    /**
     * 触发店铺的店铺id，当连锁触发返回分店id，总部触发返回总部id，单店触发返回单店店铺id
     * @var int
     */
    private $nodeId;

    /**
     * 业务唯一标识
     * @var string
     */
    private $bizToken;

    /**
     * 积分数量，交易产生订单发生退款场景会有值返回，如：积分抵现，积分兑换、下单送积分产生退款场景
     * @var int
     */
    private $amount;

    /**
     * 积分变更来源店铺id
     * @var int
     */
    private $sourceKdtId;



    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ?ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(?ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    /**
     * @return string
     */
    public function getBizValue(): ?string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(?string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getConsumeSource(): ?int
    {
        return $this->consumeSource;
    }

    /**
     * @param int $consumeSource
     */
    public function setConsumeSource(?int $consumeSource): void
    {
        $this->consumeSource = $consumeSource;
    }

    /**
     * @return int
     */
    public function getConsumeType(): ?int
    {
        return $this->consumeType;
    }

    /**
     * @param int $consumeType
     */
    public function setConsumeType(?int $consumeType): void
    {
        $this->consumeType = $consumeType;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): ?stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(?stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

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
    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    /**
     * @param int $nodeId
     */
    public function setNodeId(?int $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return string
     */
    public function getBizToken(): ?string
    {
        return $this->bizToken;
    }

    /**
     * @param string $bizToken
     */
    public function setBizToken(?string $bizToken): void
    {
        $this->bizToken = $bizToken;
    }

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getSourceKdtId(): ?int
    {
        return $this->sourceKdtId;
    }

    /**
     * @param int $sourceKdtId
     */
    public function setSourceKdtId(?int $sourceKdtId): void
    {
        $this->sourceKdtId = $sourceKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}