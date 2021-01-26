<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;



/**
 * 请求参数
 * @author Baymax
 * @create 2020-06-08 13:28:28.0
 */
class ExtTaskAwardSendRulesRequestDTO implements \JsonSerializable {

    /**
     * 总部ID：若单店（hqKdtId &#x3D; kdtId）
     * @var int
     */
    private $rootKdtId;

    /**
     * 销售员openId
     * @var string
     */
    private $yzOpenId;

    /**
     * 任务奖励ID
     * @var int
     */
    private $taskId;

    /**
     * 销售员获得的奖励
     * @var int
     */
    private $awardGrade;

    /**
     * 任务要求类型：1：推广订单金额 单位（分），2：推广订单数，3：推广商品数
     * @var int
     */
    private $taskDemandType;

    /**
     * 销售员获得分值
     * @var int
     */
    private $score;

    /**
     * 销售员手机号
     * @var string
     */
    private $mobile;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 任务奖励开始时间，单位ms
     * @var int
     */
    private $taskStartTime;

    /**
     * 任务奖励结束时间，当商家提前终止任务时，结束时间是终止时间,单位ms
     * @var int
     */
    private $taskEndTime;



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
     * @return int
     */
    public function getAwardGrade(): ?int
    {
        return $this->awardGrade;
    }

    /**
     * @param int $awardGrade
     */
    public function setAwardGrade(?int $awardGrade): void
    {
        $this->awardGrade = $awardGrade;
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
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
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

    /**
     * @return int
     */
    public function getTaskStartTime(): ?int
    {
        return $this->taskStartTime;
    }

    /**
     * @param int $taskStartTime
     */
    public function setTaskStartTime(?int $taskStartTime): void
    {
        $this->taskStartTime = $taskStartTime;
    }

    /**
     * @return int
     */
    public function getTaskEndTime(): ?int
    {
        return $this->taskEndTime;
    }

    /**
     * @param int $taskEndTime
     */
    public function setTaskEndTime(?int $taskEndTime): void
    {
        $this->taskEndTime = $taskEndTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}