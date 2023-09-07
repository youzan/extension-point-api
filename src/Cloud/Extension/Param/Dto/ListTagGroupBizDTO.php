<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求参数
 * @author Baymax
 * @create Thu Aug 31 14:09:30 CST 2023
 */
class ListTagGroupBizDTO implements \JsonSerializable {

    /**
     * 企微助手客户id，企微助手客户在有赞的唯一id
     * @var int
     */
    private $yzOpenId;

    /**
     * 企微助手员工id，企微助手员工在有赞的唯一id
     * @var int
     */
    private $guideYzOpenId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getYzOpenId(): ?int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(?int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getGuideYzOpenId(): ?int
    {
        return $this->guideYzOpenId;
    }

    /**
     * @param int $guideYzOpenId
     */
    public function setGuideYzOpenId(?int $guideYzOpenId): void
    {
        $this->guideYzOpenId = $guideYzOpenId;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}