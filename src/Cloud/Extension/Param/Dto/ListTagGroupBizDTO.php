<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求参数
 * @author Baymax
 * @create Sun Oct 08 11:06:27 CST 2023
 */
class ListTagGroupBizDTO implements \JsonSerializable {

    /**
     * 企微助手客户id，企微助手客户在有赞的唯一id
     * @var string
     */
    private $yzOpenId;

    /**
     * 企微助手员工id，企微助手员工在有赞的唯一id
     * @var string
     */
    private $guideYzOpenId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getGuideYzOpenId(): ?string
    {
        return $this->guideYzOpenId;
    }

    /**
     * @param string $guideYzOpenId
     */
    public function setGuideYzOpenId(?string $guideYzOpenId): void
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