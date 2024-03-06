<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\CobuildTagGroupRespDTO\TagGroupDetail;

/**
 * 结果数据
 * @author Baymax
 * @create Mon Sep 11 14:50:31 CST 2023
 */
class CobuildTagGroupRespDTO implements \JsonSerializable {

    /**
     * 标签组详情
     * @var array
     */
    private $tagGroupDetails;



    /**
     * @return array
     */
    public function getTagGroupDetails(): ?array
    {
        return $this->tagGroupDetails;
    }

    /**
     * @param array $tagGroupDetails
     */
    public function setTagGroupDetails(?array $tagGroupDetails): void
    {
        $this->tagGroupDetails = $tagGroupDetails;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}