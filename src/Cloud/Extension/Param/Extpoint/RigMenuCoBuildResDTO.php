<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\InsertOptMenuEntity;

/**
 * 
 * @author Baymax
 * @create 2020-09-01 17:22:42.0
 */
class RigMenuCoBuildResDTO implements \JsonSerializable {

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
     * 
     * @var InsertOptMenuEntity
     */
    private $insertOpt;



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

    /**
     * @return InsertOptMenuEntity
     */
    public function getInsertOpt(): InsertOptMenuEntity
    {
        return $this->insertOpt;
    }

    /**
     * @param InsertOptMenuEntity $insertOpt
     */
    public function setInsertOpt(InsertOptMenuEntity $insertOpt): void
    {
        $this->insertOpt = $insertOpt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}