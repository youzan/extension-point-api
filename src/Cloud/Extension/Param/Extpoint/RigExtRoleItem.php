<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 *  
 * @author Baymax
 * @create Tue Jan 10 20:10:11 CST 2023
 */
class RigExtRoleItem implements \JsonSerializable {

    /**
     * 员工角色ID
     * @var int
     */
    private $roleId;

    /**
     * 角色名称
     * @var string
     */
    private $roleName;

    /**
     * 角色类型：1默认角色， 2：自定义角色
     * @var int
     */
    private $roleType;



    /**
     * @return int
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    /**
     * @param int $roleId
     */
    public function setRoleId(?int $roleId): void
    {
        $this->roleId = $roleId;
    }

    /**
     * @return string
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     */
    public function setRoleName(?string $roleName): void
    {
        $this->roleName = $roleName;
    }

    /**
     * @return int
     */
    public function getRoleType(): ?int
    {
        return $this->roleType;
    }

    /**
     * @param int $roleType
     */
    public function setRoleType(?int $roleType): void
    {
        $this->roleType = $roleType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}