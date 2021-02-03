<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use StdClass;

/**
 * 活动信息
 * @author Baymax
 * @create 2019-07-23 20:10:40.0
 */
class ThirdpartyActivityDTO implements \JsonSerializable {

    /**
     * 外部活动id
     * @var int
     */
    private $id;

    /**
     * 标题
     * @var string
     */
    private $title;

    /**
     * 优惠方式 1 - 代金券类型，单位分 2 - 折扣券类型，真是折扣等于 value/10，如9.5折，value &#x3D; 95
     * @var int
     */
    private $preferentialMode;

    /**
     * 优惠面额
     * @var int
     */
    private $value;

    /**
     * 1 - 有效 2 - 无效
     * @var int
     */
    private $status;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}