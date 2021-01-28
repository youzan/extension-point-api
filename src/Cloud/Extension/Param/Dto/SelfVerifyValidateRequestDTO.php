<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-12-23 10:44:38.0
 */
class SelfVerifyValidateRequestDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单所属的店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 订单所属的店铺总部id
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
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getNodeId(): int
    {
        return $this->nodeId;
    }

    /**
     * @param int $nodeId
     */
    public function setNodeId(int $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return int
     */
    public function getOperatorId(): int
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     */
    public function setOperatorId(int $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return string
     */
    public function getSelfFetchCode(): string
    {
        return $this->selfFetchCode;
    }

    /**
     * @param string $selfFetchCode
     */
    public function setSelfFetchCode(string $selfFetchCode): void
    {
        $this->selfFetchCode = $selfFetchCode;
    }

    /**
     * @return stdClass
     */
    public function getExtension(): stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(stdClass $extension): void
    {
        $this->extension = $extension;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}