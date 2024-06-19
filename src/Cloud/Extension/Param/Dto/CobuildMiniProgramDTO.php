<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 小程序，仅能发送在企业微信关联的小程序，详细查看：https://help.youzan.com/displaylist/detail_26_26-2-52503
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildMiniProgramDTO implements \JsonSerializable {

    /**
     * 小程序标题
     * @var string
     */
    private $title;

    /**
     * 小程序appId
     * @var string
     */
    private $appId;

    /**
     * 地址
     * @var string
     */
    private $path;

    /**
     * 封面图片地址
     * @var string
     */
    private $thumbUrl;



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
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
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