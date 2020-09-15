<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigExtRoleItem;

/**
 * 
 * @author Baymax
 * @create 2020-09-15 12:26:32.0
 */
class RigExtStaffEntity implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $staffId;

    /**
     * 
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
    public function getStaffId(): string
    {
        return $this->staffId;
    }

    /**
     * @param string $staffId
     */
    public function setStaffId(string $staffId): void
    {
        $this->staffId = $staffId;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}