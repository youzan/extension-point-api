<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;
use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create 2018-09-30 14:22:43.0
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
     * 积分消耗来源，300：积分商城；301：积分抵扣
     * @var int
     */
    private $consumeSource;

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
     * node_id 分店id（当是连锁且用户访问的是分店时有此参数）
     * @var int
     */
    private $nodeId;



    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    /**
     * @return string
     */
    public function getBizValue(): string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getConsumeSource(): int
    {
        return $this->consumeSource;
    }

    /**
     * @param int $consumeSource
     */
    public function setConsumeSource(int $consumeSource): void
    {
        $this->consumeSource = $consumeSource;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}