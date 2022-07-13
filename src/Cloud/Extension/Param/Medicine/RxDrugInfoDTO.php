<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;



/**
 * 处方药品信息
 * @author Baymax
 * @create Mon Mar 14 15:58:14 CST 2022
 */
class RxDrugInfoDTO implements \JsonSerializable {

    /**
     * 药品通用名
     * @var string
     */
    private $commonName;

    /**
     * 规格
     * @var string
     */
    private $spec;

    /**
     * 数量
     * @var int
     */
    private $count;

    /**
     * 数量单位
     * @var string
     */
    private $countUnit;

    /**
     * 用法
     * @var string
     */
    private $usage;

    /**
     * 频率
     * @var string
     */
    private $frequency;



    /**
     * @return string
     */
    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    /**
     * @param string $commonName
     */
    public function setCommonName(?string $commonName): void
    {
        $this->commonName = $commonName;
    }

    /**
     * @return string
     */
    public function getSpec(): ?string
    {
        return $this->spec;
    }

    /**
     * @param string $spec
     */
    public function setSpec(?string $spec): void
    {
        $this->spec = $spec;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getCountUnit(): ?string
    {
        return $this->countUnit;
    }

    /**
     * @param string $countUnit
     */
    public function setCountUnit(?string $countUnit): void
    {
        $this->countUnit = $countUnit;
    }

    /**
     * @return string
     */
    public function getUsage(): ?string
    {
        return $this->usage;
    }

    /**
     * @param string $usage
     */
    public function setUsage(?string $usage): void
    {
        $this->usage = $usage;
    }

    /**
     * @return string
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     */
    public function setFrequency(?string $frequency): void
    {
        $this->frequency = $frequency;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}