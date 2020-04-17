<?php

namespace Com\Youzan\Cloud\Extension\Param\Beauty;



/**
 * 
 * @author Baymax
 * @create Fri Mar 20 14:36:00 CST 2020
 */
class GroupOpenCheckResponseDTO implements \JsonSerializable {

    /**
     * 对于美业普通版和专业版店铺kdtId是店铺唯一标示;  对于美业直营+加盟混营模式，kdtId 在直营门店内代表店铺唯一标示, 在加盟区域门店内代表区域唯一标示
     * @var int
     */
    private $kdtId;

    /**
     * 门店ID
     * @var int
     */
    private $deptId;

    /**
     * 有赞用户唯一标示
     * @var string
     */
    private $yzOpenId;

    /**
     * 是否允许开团
     * @var bool
     */
    private $isAllowOpenGroup;

    /**
     * 当返回结果里 isAllowOpenGroup &#x3D;&#x3D; false 时，可选择将不允许开团的原因传入 reasonDescribe 字段，拼团页面可将原因进行展示，默认为[无法参与活动]
     * @var string
     */
    private $reasonDescribe;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getDeptId(): int
    {
        return $this->deptId;
    }

    /**
     * @param int $deptId
     */
    public function setDeptId(int $deptId): void
    {
        $this->deptId = $deptId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return bool
     */
    public function getIsAllowOpenGroup(): bool
    {
        return $this->isAllowOpenGroup;
    }

    /**
     * @param bool $isAllowOpenGroup
     */
    public function setIsAllowOpenGroup(bool $isAllowOpenGroup): void
    {
        $this->isAllowOpenGroup = $isAllowOpenGroup;
    }

    /**
     * @return string
     */
    public function getReasonDescribe(): string
    {
        return $this->reasonDescribe;
    }

    /**
     * @param string $reasonDescribe
     */
    public function setReasonDescribe(string $reasonDescribe): void
    {
        $this->reasonDescribe = $reasonDescribe;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}