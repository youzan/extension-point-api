<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * 活动信息
 * @author Baymax
 * @create 2020-02-12 16:36:21.0
 */
class ThirdpartyActivityDTO implements \JsonSerializable {

    /**
     * 三方活动Id
     * @var int
     */
    private $id;

    /**
     * 三方活动标题
     * @var string
     */
    private $title;

    /**
     * 1-代金券 2-折扣券
     * @var int
     */
    private $preferentialMode;

    /**
     * 优惠面额- 代金券类型，单位分 - 折扣券类型，真实折扣等于 value/10，如9.5折，value &#x3D; 95
     * @var int
     */
    private $value;

    /**
     * 1-有效 2-无效
     * @var int
     */
    private $status;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;

    /**
     * 面额生成规则类型  1:固定值(满减券，折扣券) &#x3D;&#x3D;&amp;gt;   value字段 （默认值）  3:范围随机(随机金额券) &#x3D;&#x3D;&amp;gt; 随机范围为minValue ~ maxValue之间
     * @var int
     */
    private $voucherValueGenerateType;

    /**
     * 随机券面额范围下限（单位：分）,随机金额券-&amp;gt;此参数为必填
     * @var int
     */
    private $minValue;

    /**
     * 随机券面额范围上限（单位：分）,随机金额券-&amp;gt;此参数为必填
     * @var int
     */
    private $maxValue;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    /**
     * @return int
     */
    public function getVoucherValueGenerateType(): int
    {
        return $this->voucherValueGenerateType;
    }

    /**
     * @param int $voucherValueGenerateType
     */
    public function setVoucherValueGenerateType(int $voucherValueGenerateType): void
    {
        $this->voucherValueGenerateType = $voucherValueGenerateType;
    }

    /**
     * @return int
     */
    public function getMinValue(): int
    {
        return $this->minValue;
    }

    /**
     * @param int $minValue
     */
    public function setMinValue(int $minValue): void
    {
        $this->minValue = $minValue;
    }

    /**
     * @return int
     */
    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue(int $maxValue): void
    {
        $this->maxValue = $maxValue;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}