<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 14:39:10 CST 2019
 */
class ExtLevelRulesResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var integer
     */
    private $level;

    /**
     * 
     * @var string
     */
    private $levelName;

    /**
     * 
     * @var string
     */
    private $rules;



    /**
     * @return integer
     */
    public function getLevel(): integer
    {
        return $this->level;
    }

    /**
     * @param integer $level
     */
    public function setLevel(integer $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getLevelName(): string
    {
        return $this->levelName;
    }

    /**
     * @param string $levelName
     */
    public function setLevelName(string $levelName): void
    {
        $this->levelName = $levelName;
    }

    /**
     * @return string
     */
    public function getRules(): string
    {
        return $this->rules;
    }

    /**
     * @param string $rules
     */
    public function setRules(string $rules): void
    {
        $this->rules = $rules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}