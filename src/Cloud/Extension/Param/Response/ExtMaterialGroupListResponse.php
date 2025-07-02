<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 素材分组列表
 * @author Baymax
 * @create Tue May 13 17:29:07 CST 2025
 */
class ExtMaterialGroupListResponse implements \JsonSerializable {

    /**
     * 素材分组id
     * @var int
     */
    private $groupId;

    /**
     * 素材分组名称
     * @var string
     */
    private $groupName;

    /**
     * 父分组id
     * @var int
     */
    private $parentGroupId;



    /**
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(?int $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * @return int
     */
    public function getParentGroupId(): ?int
    {
        return $this->parentGroupId;
    }

    /**
     * @param int $parentGroupId
     */
    public function setParentGroupId(?int $parentGroupId): void
    {
        $this->parentGroupId = $parentGroupId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}