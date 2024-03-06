<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtBatchGetGoodsCommissionRequest;



/**
 * 导购员信息
 * @author Baymax
 * @create Mon Jun 06 14:04:50 CST 2022
 */
class GuideInfo implements \JsonSerializable {

    /**
     * 导购员等级
     * @var int
     */
    private $level;

    /**
     * 导购yz_open_id
     * @var string
     */
    private $openId;

    /**
     * 导购员手机号
     * @var string
     */
    private $mobile;



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
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * @param string $openId
     */
    public function setOpenId(?string $openId): void
    {
        $this->openId = $openId;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}