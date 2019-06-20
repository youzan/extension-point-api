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
     * @var DateTime
     */
    private $termBeginAt;

    /**
     * 等级有效期结束时间
     * @var DateTime
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
     * @return DateTime
     */
    public function getTermBeginAt(): DateTime
    {
        return $this->termBeginAt;
    }

    /**
     * @param DateTime $termBeginAt
     */
    public function setTermBeginAt(DateTime $termBeginAt): void
    {
        $this->termBeginAt = $termBeginAt;
    }

    /**
     * @return DateTime
     */
    public function getTermEndAt(): DateTime
    {
        return $this->termEndAt;
    }

    /**
     * @param DateTime $termEndAt
     */
    public function setTermEndAt(DateTime $termEndAt): void
    {
        $this->termEndAt = $termEndAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}