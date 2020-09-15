<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 
 * @author Baymax
 * @create 2020-09-15 12:26:32.0
 */
class RigExtRoleItem implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $roleId;

    /**
     * 
     * @var string
     */
    private $roleName;

    /**
     * 
     * @var int
     */
    private $roleType;



    /**
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->roleId;
    }

    /**
     * @param int $roleId
     */
    public function setRoleId(int $roleId): void
    {
        $this->roleId = $roleId;
    }

    /**
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     */
    public function setRoleName(string $roleName): void
    {
        $this->roleName = $roleName;
    }

    /**
     * @return int
     */
    public function getRoleType(): int
    {
        return $this->roleType;
    }

    /**
     * @param int $roleType
     */
    public function setRoleType(int $roleType): void
    {
        $this->roleType = $roleType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}