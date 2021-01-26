<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 14:39:10.0
 */
class ExtLevelRulesResponseDTO implements \JsonSerializable {

    /**
     * 等级值
     * @var int
     */
    private $level;

    /**
     * 等级对应的等级名称
     * @var string
     */
    private $levelName;

    /**
     * 升级规则描述
     * @var string
     */
    private $rules;



    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getLevelName(): ?string
    {
        return $this->levelName;
    }

    /**
     * @param string $levelName
     */
    public function setLevelName(?string $levelName): void
    {
        $this->levelName = $levelName;
    }

    /**
     * @return string
     */
    public function getRules(): ?string
    {
        return $this->rules;
    }

    /**
     * @param string $rules
     */
    public function setRules(?string $rules): void
    {
        $this->rules = $rules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}