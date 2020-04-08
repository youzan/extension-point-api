<?php

namespace Com\Youzan\Cloud\Extension\Param\Beauty;



/**
 * 
 * @author Baymax
 * @create 2020-03-20 14:36:00.0
 */
class GroupOpenCheckRequestDTO implements \JsonSerializable {

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
     * 有赞用户唯一标识
     * @var string
     */
    private $yzOpenId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}