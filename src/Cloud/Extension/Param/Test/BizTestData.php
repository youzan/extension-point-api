<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 数据
 * @author Baymax
 * @create 2018-09-17 21:46:05.0
 */
class BizTestData implements \JsonSerializable {

    /**
     * 数据整型值
     * @var int
     */
    private $number;

    /**
     * 数据字符串值
     * @var string
     */
    private $content;



    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}