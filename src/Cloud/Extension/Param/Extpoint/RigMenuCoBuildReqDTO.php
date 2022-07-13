<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigExtStaffEntity;

/**
 *  
 * @author Baymax
 * @create Tue May 17 11:37:25 CST 2022
 */
class RigMenuCoBuildReqDTO implements \JsonSerializable {

    /**
     * 店铺ID
     * @var string
     */
    private $kdtId;

    /**
     * 店铺类型，微商城单店： wsc_single，教育单店：wsc_edu_single，教育总部：wsc_edu_hq，教育校区：wsc_edu_online，零售总部：retail_hq，零售门店：retail_store，零售网店：retail_online，零售单店：retail_single，前置仓：retail_front_warehouse，合伙人：retail_partner，微商城4.0L版总部：retail_v_wsc_hq，微商城4.0L版网店：retail_v_wsc_online，微商城4.0L版合伙人：retail_v_wsc_partner
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
     * @return RigExtStaffEntity
     */
    public function getStaffInfo(): ?RigExtStaffEntity
    {
        return $this->staffInfo;
    }

    /**
     * @param RigExtStaffEntity $staffInfo
     */
    public function setStaffInfo(?RigExtStaffEntity $staffInfo): void
    {
        $this->staffInfo = $staffInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}