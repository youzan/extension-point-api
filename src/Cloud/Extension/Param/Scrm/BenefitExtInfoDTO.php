<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 返回参数
 * @author Baymax
 * @create 2018-10-16 19:37:48.0
 */
class BenefitExtInfoDTO implements \JsonSerializable {

    /**
     * 是否包邮
     * @var bool
     */
    private $postageFreeFlag;

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * 是否存在等级权益
     * @var bool
     */
    private $levelBenefitFlag;



    /**
     * @return bool
     */
    public function getPostageFreeFlag(): bool
    {
        return $this->postageFreeFlag;
    }

    /**
     * @param bool $postageFreeFlag
     */
    public function setPostageFreeFlag(bool $postageFreeFlag): void
    {
        $this->postageFreeFlag = $postageFreeFlag;
    }

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
     * @return bool
     */
    public function getLevelBenefitFlag(): bool
    {
        return $this->levelBenefitFlag;
    }

    /**
     * @param bool $levelBenefitFlag
     */
    public function setLevelBenefitFlag(bool $levelBenefitFlag): void
    {
        $this->levelBenefitFlag = $levelBenefitFlag;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}