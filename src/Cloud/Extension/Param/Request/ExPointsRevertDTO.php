<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCustomerInfoDTO;
use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create 2020-12-15 20:43:56.0
 */
class ExPointsRevertDTO implements \JsonSerializable {

    /**
     * 账号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;

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
     * 业务标识(e.g.订单号)
     * @var string
     */
    private $bizValue;

    /**
     * 积分增加描述
     * @var string
     */
    private $description;

    /**
     * 401,&quot;积分兑换退款获得积分&quot;, 400,&quot;积分抵现退款获得积分&quot;;
     * @var int
     */
    private $eventType;

    /**
     * 扩展信息(e.g.订单信息)
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 是否需要走扩展点，默认:true; 如果商家实现对接拓展点, 在true的情况下,会执行商家实现的拓展点.在false的情况下,执行官方默认逻辑;
     * @var bool
     */
    private $isDoExtPoint;



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

    /**
     * @return bool
     */
    public function getIsDoExtPoint(): ?bool
    {
        return $this->isDoExtPoint;
    }

    /**
     * @param bool $isDoExtPoint
     */
    public function setIsDoExtPoint(?bool $isDoExtPoint): void
    {
        $this->isDoExtPoint = $isDoExtPoint;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}