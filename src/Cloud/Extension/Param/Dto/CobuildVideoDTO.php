<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 视频，大小不能超过10MB，支持MP4格式。
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildVideoDTO implements \JsonSerializable {

    /**
     * 视频url
     * @var string
     */
    private $url;

    /**
     * 视频名称
     * @var string
     */
    private $name;

    /**
     * 视频封面图片地址
     * @var string
     */
    private $thumbUrl;



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

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     */
    public function setThumbUrl(?string $thumbUrl): void
    {
        $this->thumbUrl = $thumbUrl;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}