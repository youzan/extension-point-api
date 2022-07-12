<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\InsertOptMenuEntity;

/**
 *  
 * @author Baymax
 * @create Tue May 17 11:37:25 CST 2022
 */
class RigMenuCoBuildResDTO implements \JsonSerializable {

    /**
     * 店铺ID
     * @var string
     */
    private $kdtId;

    /**
     * 店铺类型，同上
     * @var string
     */
    private $bizCode;

    /**
     *  
     * @var InsertOptMenuEntity
     */
    private $insertOpt;

    /**
     * 平台分配的应用appId
     * @var string
     */
    private $appId;



    /**
     * @return string
     */
    public function getKdtId(): ?string
    {
        return $this->kdtId;
    }

    /**
     * @param string $kdtId
     */
    public function setKdtId(?string $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getBizCode(): ?string
    {
        return $this->bizCode;
    }

    /**
     * @param string $bizCode
     */
    public function setBizCode(?string $bizCode): void
    {
        $this->bizCode = $bizCode;
    }

    /**
     * @return InsertOptMenuEntity
     */
    public function getInsertOpt(): ?InsertOptMenuEntity
    {
        return $this->insertOpt;
    }

    /**
     * @param InsertOptMenuEntity $insertOpt
     */
    public function setInsertOpt(?InsertOptMenuEntity $insertOpt): void
    {
        $this->insertOpt = $insertOpt;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}