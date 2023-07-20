<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 增加用户成长值入参
 * @author Baymax
 * @create Tue Mar 07 15:13:55 CST 2023
 */
class ExtGrowthIncreaseDTO implements \JsonSerializable {

    /**
     * 商家id
     * @var int
     */
    private $kdtId;

    /**
     * 成长值
     * @var int
     */
    private $amount;

    /**
     * 成长值增加原因
     * @var string
     */
    private $description;

    /**
     * 业务编号，不唯一
     * @var string
     */
    private $bizValue;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 触发店铺的店铺ID，当连锁触发返回分店ID，总部触发返回总部ID，单店触发返回单店店铺ID
     * @var int
     */
    private $nodeKdtId;

    /**
     * 成长值增加业务类型  812-交易金额成长值规则发放成长值，813-交易购次成长值规则发放成长值，815-节日发放成长值，816-纪念日发放成长值
     * @var int
     */
    private $eventType;



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
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return int
     */
    public function getEventType(): ?int
    {
        return $this->eventType;
    }

    /**
     * @param int $eventType
     */
    public function setEventType(?int $eventType): void
    {
        $this->eventType = $eventType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}