<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 图片，图片大小不能超过2M，支持JPG,PNG格式。
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildImageDTO implements \JsonSerializable {

    /**
     * 图片地址
     * @var string
     */
    private $url;



    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}