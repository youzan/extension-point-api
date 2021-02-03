<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:43:58.0
 */
class ExtLevelDTO implements \JsonSerializable {

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * 等级值(1-10)
     * @var int
     */
    private $levelValue;

    /**
     * 等级名称
     * @var string
     */
    private $name;

    /**
     * 等级描述
     * @var string
     */
    private $description;

    /**
     * 等级是否可用 true-可用，false-不可用
     * @var bool
     */
    private $isEnabled;

    /**
     * 等级背景色，支持值：Color010-浅绿色,Color020-深绿色,Color030-浅蓝色,Color040-深蓝色
     * @var string
     */
    private $colorCode;

    /**
     * 等级所需要的成长值
     * @var int
     */
    private $growthValue;

    /**
     * 等级唯一标识
     * @var int
     */
    private $levelId;



    /**
     * @return string
     */
    public function getLevelAlias(): string
    {
        return $this->levelAlias;
    }

    /**
     * @param string $levelAlias
     */
    public function setLevelAlias(string $levelAlias): void
    {
        $this->levelAlias = $levelAlias;
    }

    /**
     * @return int
     */
    public function getLevelValue(): int
    {
        return $this->levelValue;
    }

    /**
     * @param int $levelValue
     */
    public function setLevelValue(int $levelValue): void
    {
        $this->levelValue = $levelValue;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled(bool $isEnabled): void
    {
        $this->isEnabled = $isEnabled;
    }

    /**
     * @return string
     */
    public function getColorCode(): string
    {
        return $this->colorCode;
    }

    /**
     * @param string $colorCode
     */
    public function setColorCode(string $colorCode): void
    {
        $this->colorCode = $colorCode;
    }

    /**
     * @return int
     */
    public function getGrowthValue(): int
    {
        return $this->growthValue;
    }

    /**
     * @param int $growthValue
     */
    public function setGrowthValue(int $growthValue): void
    {
        $this->growthValue = $growthValue;
    }

    /**
     * @return int
     */
    public function getLevelId(): int
    {
        return $this->levelId;
    }

    /**
     * @param int $levelId
     */
    public function setLevelId(int $levelId): void
    {
        $this->levelId = $levelId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}