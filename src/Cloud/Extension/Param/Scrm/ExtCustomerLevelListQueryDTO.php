<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerIdentityDTO;
use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create Thu May 22 14:20:26 CST 2025
 */
class ExtCustomerLevelListQueryDTO implements \JsonSerializable {

    /**
     * 17658987654
     * @var ExtCustomerIdentityDTO
     */
    private $extCustomerIdentityDTO;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;

    /**
     *  
     * @var stdClass
     */
    private $extensionMap;

    /**
     * node_id 分店id（当是连锁且用户访问的是分店时有此参数）
     * @var int
     */
    private $nodeId;

    /**
     * 是否需要查询用户等级进度信息（仅针对免费等级）。当前扩展点，此字段为false
     * @var bool
     */
    private $withCustomerLevelProgress;



    /**
     * @return ExtCustomerIdentityDTO
     */
    public function getExtCustomerIdentityDTO(): ?ExtCustomerIdentityDTO
    {
        return $this->extCustomerIdentityDTO;
    }

    /**
     * @param ExtCustomerIdentityDTO $extCustomerIdentityDTO
     */
    public function setExtCustomerIdentityDTO(?ExtCustomerIdentityDTO $extCustomerIdentityDTO): void
    {
        $this->extCustomerIdentityDTO = $extCustomerIdentityDTO;
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
     * @return stdClass
     */
    public function getExtensionMap(): ?stdClass
    {
        return $this->extensionMap;
    }

    /**
     * @param stdClass $extensionMap
     */
    public function setExtensionMap(?stdClass $extensionMap): void
    {
        $this->extensionMap = $extensionMap;
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
     * @return bool
     */
    public function getWithCustomerLevelProgress(): ?bool
    {
        return $this->withCustomerLevelProgress;
    }

    /**
     * @param bool $withCustomerLevelProgress
     */
    public function setWithCustomerLevelProgress(?bool $withCustomerLevelProgress): void
    {
        $this->withCustomerLevelProgress = $withCustomerLevelProgress;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}