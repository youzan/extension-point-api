<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Sat Jul 30 23:30:58 CST 2022
 */
class SelfVerifyValidateRequestDTO implements \JsonSerializable {

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 订单所属的店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 订单所属的店铺总部id，店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $nodeId;

    /**
     * 核销员id
     * @var int
     */
    private $operatorId;

    /**
     * 自提的核销码
     * @var string
     */
    private $selfFetchCode;

    /**
     * 扩展字段;暂时没有进行赋值
     * @var stdClass
     */
    private $extension;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
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
     * @return int
     */
    public function getOperatorId(): ?int
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     */
    public function setOperatorId(?int $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return string
     */
    public function getSelfFetchCode(): ?string
    {
        return $this->selfFetchCode;
    }

    /**
     * @param string $selfFetchCode
     */
    public function setSelfFetchCode(?string $selfFetchCode): void
    {
        $this->selfFetchCode = $selfFetchCode;
    }

    /**
     * @return stdClass
     */
    public function getExtension(): ?stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(?stdClass $extension): void
    {
        $this->extension = $extension;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}