<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use DateTime;

/**
 * 用户等级列表
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
 */
class ExtCustomerLevelDTO implements \JsonSerializable {

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * 在c端场景下，是客户等级的唯一标志,通过b端等级配置+用户生成
     * @var string
     */
    private $identityNo;

    /**
     * 等级有效期开始时间
     * @var int
     */
    private $termBeginAt;

    /**
     * 等级有效期结束时间
     * @var int
     */
    private $termEndAt;



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
     * @return string
     */
    public function getIdentityNo(): string
    {
        return $this->identityNo;
    }

    /**
     * @param string $identityNo
     */
    public function setIdentityNo(string $identityNo): void
    {
        $this->identityNo = $identityNo;
    }

    /**
     * @return int
     */
    public function getTermBeginAt(): int
    {
        return $this->termBeginAt;
    }

    /**
     * @param int $termBeginAt
     */
    public function setTermBeginAt(int $termBeginAt): void
    {
        $this->termBeginAt = $termBeginAt;
    }

    /**
     * @return int
     */
    public function getTermEndAt(): int
    {
        return $this->termEndAt;
    }

    /**
     * @param int $termEndAt
     */
    public function setTermEndAt(int $termEndAt): void
    {
        $this->termEndAt = $termEndAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}