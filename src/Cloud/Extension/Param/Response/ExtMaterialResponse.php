<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialGroupListResponse;

/**
 * 素材列表
 * @author Baymax
 * @create Tue May 20 19:40:16 CST 2025
 */
class ExtMaterialResponse implements \JsonSerializable {

    /**
     * 素材id
     * @var int
     */
    private $id;

    /**
     * 素材名称
     * @var string
     */
    private $name;

    /**
     * 素材类型，0：图片，1：视频，2：微页面，3：店铺笔记
     * @var int
     */
    private $materialType;

    /**
     * 素材分组
     * @var array
     */
    private $materialGroupList;



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
     * @return int
     */
    public function getMaterialType(): ?int
    {
        return $this->materialType;
    }

    /**
     * @param int $materialType
     */
    public function setMaterialType(?int $materialType): void
    {
        $this->materialType = $materialType;
    }

    /**
     * @return array
     */
    public function getMaterialGroupList(): ?array
    {
        return $this->materialGroupList;
    }

    /**
     * @param array $materialGroupList
     */
    public function setMaterialGroupList(?array $materialGroupList): void
    {
        $this->materialGroupList = $materialGroupList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}