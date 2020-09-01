<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 
 * @author Baymax
 * @create 2020-09-01 17:22:42.0
 */
class RigMenuCoBuildReqDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $tenantId;

    /**
     * 
     * @var string
     */
    private $bizCode;



    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    /**
     * @param string $tenantId
     */
    public function setTenantId(string $tenantId): void
    {
        $this->tenantId = $tenantId;
    }

    /**
     * @return string
     */
    public function getBizCode(): string
    {
        return $this->bizCode;
    }

    /**
     * @param string $bizCode
     */
    public function setBizCode(string $bizCode): void
    {
        $this->bizCode = $bizCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}