<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerIdentityDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
 */
class ExtCustomerLevelListQueryDTO implements \JsonSerializable {

    /**
     * 用户识别信息
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}