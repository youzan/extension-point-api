<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 链接
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobulildLinkDTO implements \JsonSerializable {

    /**
     * 链接url
     * @var string
     */
    private $url;

    /**
     * 链接标题
     * @var string
     */
    private $title;

    /**
     * 链接封面图片地址
     * @var string
     */
    private $thumbUrl;

    /**
     * 链接描述
     * @var string
     */
    private $linkDesc;



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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
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

    /**
     * @return string
     */
    public function getLinkDesc(): ?string
    {
        return $this->linkDesc;
    }

    /**
     * @param string $linkDesc
     */
    public function setLinkDesc(?string $linkDesc): void
    {
        $this->linkDesc = $linkDesc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}