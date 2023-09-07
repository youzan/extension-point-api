<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\CobuildRelTagGroupRespDTO\TagDetailDTO;

/**
 * 结果数据
 * @author Baymax
 * @create Thu Aug 31 14:09:30 CST 2023
 */
class CobuildRelTagGroupRespDTO implements \JsonSerializable {

    /**
     * 标签列表
     * @var array
     */
    private $tags;



    /**
     * @return array
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}