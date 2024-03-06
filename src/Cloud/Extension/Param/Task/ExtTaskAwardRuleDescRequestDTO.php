<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:50:32 CST 2022
 */
class ExtTaskAwardRuleDescRequestDTO implements \JsonSerializable {

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 任务奖励ID
     * @var int
     */
    private $taskId;

    /**
     * 奖励层级集合
     * @var array
     */
    private $awardGradeList;

    /**
     * 任务要求类型:1:订单金额 单位（分）,2:推广订单数,3:推广商品件数
     * @var int
     */
    private $taskDemandType;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     */
    public function setTaskId(?int $taskId): void
    {
        $this->taskId = $taskId;
    }

    /**
     * @return array
     */
    public function getAwardGradeList(): ?array
    {
        return $this->awardGradeList;
    }

    /**
     * @param array $awardGradeList
     */
    public function setAwardGradeList(?array $awardGradeList): void
    {
        $this->awardGradeList = $awardGradeList;
    }

    /**
     * @return int
     */
    public function getTaskDemandType(): ?int
    {
        return $this->taskDemandType;
    }

    /**
     * @param int $taskDemandType
     */
    public function setTaskDemandType(?int $taskDemandType): void
    {
        $this->taskDemandType = $taskDemandType;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}