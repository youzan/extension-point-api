<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use DateTime;

/**
 * 用户等级列表
 * @author Baymax
 * @create Tue Mar 24 16:07:34 CST 2026
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
     * 个人中心是否展示进度条，true:展示，false:不展示，默认为展示
     * @var bool
     */
    private $showProgressBar;

    /**
     * 消费等级模式下当前等级的保级进度。空字符串：表示已保级，个人中心不展示任何保级文案；非空字符串：返回类似“再消费XX元可保留当前等级”文案；null：使用有赞计算的保级进度
     * @var string
     */
    private $keepLevelProgress;



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
    public function getIdentityNo(): ?string
    {
        return $this->identityNo;
    }

    /**
     * @param string $identityNo
     */
    public function setIdentityNo(?string $identityNo): void
    {
        $this->identityNo = $identityNo;
    }

    /**
     * @return int
     */
    public function getTermBeginAt(): ?int
    {
        return $this->termBeginAt;
    }

    /**
     * @param int $termBeginAt
     */
    public function setTermBeginAt(?int $termBeginAt): void
    {
        $this->termBeginAt = $termBeginAt;
    }

    /**
     * @return int
     */
    public function getTermEndAt(): ?int
    {
        return $this->termEndAt;
    }

    /**
     * @param int $termEndAt
     */
    public function setTermEndAt(?int $termEndAt): void
    {
        $this->termEndAt = $termEndAt;
    }

    /**
     * @return bool
     */
    public function getShowProgressBar(): ?bool
    {
        return $this->showProgressBar;
    }

    /**
     * @param bool $showProgressBar
     */
    public function setShowProgressBar(?bool $showProgressBar): void
    {
        $this->showProgressBar = $showProgressBar;
    }

    /**
     * @return string
     */
    public function getKeepLevelProgress(): ?string
    {
        return $this->keepLevelProgress;
    }

    /**
     * @param string $keepLevelProgress
     */
    public function setKeepLevelProgress(?string $keepLevelProgress): void
    {
        $this->keepLevelProgress = $keepLevelProgress;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}