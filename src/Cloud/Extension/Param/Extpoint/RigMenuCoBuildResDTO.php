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
    private $kdtId;

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
     * 
     * @var string
     */
    private $appId;



    /**
     * @return string
     */
    public function getKdtId(): string
    {
        return $this->kdtId;
    }

    /**
     * @param string $kdtId
     */
    public function setKdtId(string $kdtId): void
    {
        $this->kdtId = $kdtId;
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

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId(string $appId): void
    {
        $this->appId = $appId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}