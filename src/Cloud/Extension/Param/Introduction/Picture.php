<?php

namespace Com\Youzan\Cloud\Extension\Param\Introduction;



/**
 *  图片
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class Picture implements \JsonSerializable {

    /**
     * 图片地址
     * @var string
     */
    private $url;

    /**
     * 图片 id
     * @var int
     */
    private $id;

    /**
     * 图片 宽度
     * @var int
     */
    private $width;

    /**
     * 图片 高度
     * @var int
     */
    private $height;



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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}