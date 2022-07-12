<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 部分回补积分扩展点传入参数
 * @author Baymax
 * @create Tue Mar 08 19:49:20 CST 2022
 */
class ExPointsPartialRevertDTO implements \JsonSerializable {

    /**
     * 单店店铺ID或连锁总部店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 触发店铺的店铺ID，当连锁触发返回分店ID，总部触发返回总部ID，单店触发返回单店店铺ID
     * @var int
     */
    private $nodeKdtId;

    /**
     * 用户标识
     * @var string
     */
    private $yzOpenId;

    /**
     * 业务标识(e.g.退款单号)
     * @var string
     */
    private $bizValue;

    /**
     * 回补描述
     * @var string
     */
    private $description;

    /**
     * 回补积分数
     * @var int
     */
    private $amount;

    /**
     * 回补事件类型{400:&quot;积分抵现退款&quot;}
     * @var int
     */
    private $eventType;

    /**
     * 回补扩展信息
     * @var stdClass
     */
    private $extraInfo;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}