<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigExtRoleItem;

/**
 *  
 * @author Baymax
 * @create Tue Jan 10 20:10:12 CST 2023
 */
class RigExtStaffEntity implements \JsonSerializable {

    /**
     * 员工ID
     * @var string
     */
    private $staffId;

    /**
     * 员工手机号
     * @var string
     */
    private $mobile;

    /**
     *  
     * @var array
     */
    private $roles;



    /**
     * @return string
     */
    public function getStaffId(): ?string
    {
        return $this->staffId;
    }

    /**
     * @param string $staffId
     */
    public function setStaffId(?string $staffId): void
    {
        $this->staffId = $staffId;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return array
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}