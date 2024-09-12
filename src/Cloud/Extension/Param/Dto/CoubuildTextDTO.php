<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 文本
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CoubuildTextDTO implements \JsonSerializable {

    /**
     * 文本内容
     * @var string
     */
    private $content;



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