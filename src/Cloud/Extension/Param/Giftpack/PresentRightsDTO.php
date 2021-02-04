<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 赠品权益
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class PresentRightsDTO implements \JsonSerializable {

    /**
     * 赠品ID
     * @var int
     */
    private $presentId;

    /**
     * 赠品名称
     * @var string
     */
    private $presentName;

    /**
     * 图片url
     * @var string
     */
    private $picUrl;

    /**
     * 赠品状态（VALID:有效，OUTOFSTOCK：无库存，DELETED：已删除，OVERDUE：过期，NOTSTARTED：未开始）
     * @var string
     */
    private $presentStatus;



    /**
     * @return int
     */
    public function getPresentId(): ?int
    {
        return $this->presentId;
    }

    /**
     * @param int $presentId
     */
    public function setPresentId(?int $presentId): void
    {
        $this->presentId = $presentId;
    }

    /**
     * @return string
     */
    public function getPresentName(): ?string
    {
        return $this->presentName;
    }

    /**
     * @param string $presentName
     */
    public function setPresentName(?string $presentName): void
    {
        $this->presentName = $presentName;
    }

    /**
     * @return string
     */
    public function getPicUrl(): ?string
    {
        return $this->picUrl;
    }

    /**
     * @param string $picUrl
     */
    public function setPicUrl(?string $picUrl): void
    {
        $this->picUrl = $picUrl;
    }

    /**
     * @return string
     */
    public function getPresentStatus(): ?string
    {
        return $this->presentStatus;
    }

    /**
     * @param string $presentStatus
     */
    public function setPresentStatus(?string $presentStatus): void
    {
        $this->presentStatus = $presentStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}