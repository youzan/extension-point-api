<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCustomerIdentityDTO;
use StdClass;

/**
 * 等级重算入参
 * @author Baymax
 * @create 2021-07-09 13:03:53.0
 */
class ExtRecalculateLevelRequestDTO implements \JsonSerializable {

    /**
     * 分店ID 同originKdtId
     * @var int
     */
    private $nodeId;

    /**
     * 用户信息
     * @var ExtCustomerIdentityDTO
     */
    private $extCustomerIdentityDTO;

    /**
     * 多店铺流量路由标识（kdtId，商户号等）
     * @var string
     */
    private $bizTrafficId;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extensionMap;



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
     * @return string
     */
    public function getBizTrafficId(): ?string
    {
        return $this->bizTrafficId;
    }

    /**
     * @param string $bizTrafficId
     */
    public function setBizTrafficId(?string $bizTrafficId): void
    {
        $this->bizTrafficId = $bizTrafficId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}