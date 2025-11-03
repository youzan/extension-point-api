<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 免费等级升级进度信息，为空时，会用有赞的等级去计算进度信息
 * @author Baymax
 * @create Thu May 22 14:19:59 CST 2025
 */
class ExtLevelProgressDTO implements \JsonSerializable {

    /**
     * 要升级到的等级名称
     * @var string
     */
    private $name;

    /**
     * 要升级到的等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * 升级到这个等级的进度文案
     * @var string
     */
    private $upLevelProgress;



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
    public function getLevelAlias(): ?string
    {
        return $this->levelAlias;
    }

    /**
     * @param string $levelAlias
     */
    public function setLevelAlias(?string $levelAlias): void
    {
        $this->levelAlias = $levelAlias;
    }

    /**
     * @return string
     */
    public function getUpLevelProgress(): ?string
    {
        return $this->upLevelProgress;
    }

    /**
     * @param string $upLevelProgress
     */
    public function setUpLevelProgress(?string $upLevelProgress): void
    {
        $this->upLevelProgress = $upLevelProgress;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}