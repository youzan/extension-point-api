<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;



/**
 * 奖励规则描述
 * @author Baymax
 * @create Mon Mar 14 16:50:32 CST 2022
 */
class ExtTaskAwardRulesDesc implements \JsonSerializable {

    /**
     * 奖励层级:1-5
     * @var int
     */
    private $awardLevel;

    /**
     * 奖励规则描述信息
     * @var string
     */
    private $desc;



    /**
     * @return int
     */
    public function getAwardLevel(): ?int
    {
        return $this->awardLevel;
    }

    /**
     * @param int $awardLevel
     */
    public function setAwardLevel(?int $awardLevel): void
    {
        $this->awardLevel = $awardLevel;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(?string $desc): void
    {
        $this->desc = $desc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}