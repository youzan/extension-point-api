<?php

namespace Com\Youzan\Cloud\Extension\Param\Query;



/**
 * 教育场景下，通用的查询用户信息的接口，通过手机号+姓名+角色的方式，查询到对应的信息
 * @author Baymax
 * @create Mon Mar 14 16:39:41 CST 2022
 */
class OuterUserQuery implements \JsonSerializable {

    /**
     * 外部机构ID，对应有赞的总部ID
     * @var int
     */
    private $companyId;

    /**
     * 外部校区ID，对应有点的分校ID
     * @var int
     */
    private $campusId;

    /**
     * 用户在有赞的opnId
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户在有赞的手机号
     * @var string
     */
    private $phone;

    /**
     * 用户在有赞的名称
     * @var string
     */
    private $name;

    /**
     * 在外部系统中的身份，可选项「STUDENT, CLUE, CUSTOMER, TEACHER」
     * @var string
     */
    private $role;



    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     */
    public function setCompanyId(?int $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * @return int
     */
    public function getCampusId(): ?int
    {
        return $this->campusId;
    }

    /**
     * @param int $campusId
     */
    public function setCampusId(?int $campusId): void
    {
        $this->campusId = $campusId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}