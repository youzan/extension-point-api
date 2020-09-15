<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigExtStaffEntity;

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
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $bizCode;

    /**
     * 
     * @var RigExtStaffEntity
     */
    private $staffInfo;



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
     * @return RigExtStaffEntity
     */
    public function getStaffInfo(): RigExtStaffEntity
    {
        return $this->staffInfo;
    }

    /**
     * @param RigExtStaffEntity $staffInfo
     */
    public function setStaffInfo(RigExtStaffEntity $staffInfo): void
    {
        $this->staffInfo = $staffInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}