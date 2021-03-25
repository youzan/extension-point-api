<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 运行时数据
 * @author Baymax
 * @create 2021-03-15 14:39:48.0
 */
class ImktJoinRunningData implements \JsonSerializable {

    /**
     * 团凭证alias
     * @var string
     */
    private $parentVoucherAlias;

    /**
     * 当前参与用户进行中团的数量
     * @var int
     */
    private $onGoingGroupNum;

    /**
     * 当前参与用户的总开团次数
     * @var int
     */
    private $startGroupNum;

    /**
     * 当前参与用户的总助力次数
     * @var int
     */
    private $helpTimes;

    /**
     * 当前团的子凭证数量
     * @var int
     */
    private $subVoucherNum;

    /**
     * 当前参与用户在当前团的助力次数
     * @var int
     */
    private $voucherHelpTimes;

    /**
     * 当前流程创建的凭证alias
     * @var string
     */
    private $voucherAlias;



    /**
     * @return string
     */
    public function getParentVoucherAlias(): ?string
    {
        return $this->parentVoucherAlias;
    }

    /**
     * @param string $parentVoucherAlias
     */
    public function setParentVoucherAlias(?string $parentVoucherAlias): void
    {
        $this->parentVoucherAlias = $parentVoucherAlias;
    }

    /**
     * @return int
     */
    public function getOnGoingGroupNum(): ?int
    {
        return $this->onGoingGroupNum;
    }

    /**
     * @param int $onGoingGroupNum
     */
    public function setOnGoingGroupNum(?int $onGoingGroupNum): void
    {
        $this->onGoingGroupNum = $onGoingGroupNum;
    }

    /**
     * @return int
     */
    public function getStartGroupNum(): ?int
    {
        return $this->startGroupNum;
    }

    /**
     * @param int $startGroupNum
     */
    public function setStartGroupNum(?int $startGroupNum): void
    {
        $this->startGroupNum = $startGroupNum;
    }

    /**
     * @return int
     */
    public function getHelpTimes(): ?int
    {
        return $this->helpTimes;
    }

    /**
     * @param int $helpTimes
     */
    public function setHelpTimes(?int $helpTimes): void
    {
        $this->helpTimes = $helpTimes;
    }

    /**
     * @return int
     */
    public function getSubVoucherNum(): ?int
    {
        return $this->subVoucherNum;
    }

    /**
     * @param int $subVoucherNum
     */
    public function setSubVoucherNum(?int $subVoucherNum): void
    {
        $this->subVoucherNum = $subVoucherNum;
    }

    /**
     * @return int
     */
    public function getVoucherHelpTimes(): ?int
    {
        return $this->voucherHelpTimes;
    }

    /**
     * @param int $voucherHelpTimes
     */
    public function setVoucherHelpTimes(?int $voucherHelpTimes): void
    {
        $this->voucherHelpTimes = $voucherHelpTimes;
    }

    /**
     * @return string
     */
    public function getVoucherAlias(): ?string
    {
        return $this->voucherAlias;
    }

    /**
     * @param string $voucherAlias
     */
    public function setVoucherAlias(?string $voucherAlias): void
    {
        $this->voucherAlias = $voucherAlias;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}