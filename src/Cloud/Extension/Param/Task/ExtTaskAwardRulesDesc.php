<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;



/**
 * 奖励规则描述
 * @author Baymax
 * @create 2020-06-16 20:15:41.0
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