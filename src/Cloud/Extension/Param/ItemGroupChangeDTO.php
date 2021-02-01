<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-08-13 18:00:49.0
 */
class ItemGroupChangeDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 变动后 title	商品标题 price	商家价格 origin	postage	统一运费 num	序号 goodsNo	商品编码 isVirtual	虚拟商品类型 messages	商品留言 class1	分类 class2	分类 joinLevelDiscount	是否参加会员折扣 deliveryTemplateId	运费模板id tag	分组（已废弃，不建议使用） hideStock	是否隐藏库存 picture 商品主图 pictureHeight	商品图片高度 startSoldTime	开售时间 subTitle	商品简介 quota	商品限购数量 content	商品详情 components	商品详情 isLock 商品锁
     * @var string
     */
    private $after;

    /**
     * 变动前
     * @var string
     */
    private $before;

    /**
     * 类型 ITEM_GROUP_CREATE（分组新增） ITEM_GROUP_UPDATE（分组编辑） ITEM_GROUP_DELETE（分组删除）
     * @var string
     */
    private $eventTypeEnum;



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

    /**
     * @return string
     */
    public function getAfter(): ?string
    {
        return $this->after;
    }

    /**
     * @param string $after
     */
    public function setAfter(?string $after): void
    {
        $this->after = $after;
    }

    /**
     * @return string
     */
    public function getBefore(): ?string
    {
        return $this->before;
    }

    /**
     * @param string $before
     */
    public function setBefore(?string $before): void
    {
        $this->before = $before;
    }

    /**
     * @return string
     */
    public function getEventTypeEnum(): ?string
    {
        return $this->eventTypeEnum;
    }

    /**
     * @param string $eventTypeEnum
     */
    public function setEventTypeEnum(?string $eventTypeEnum): void
    {
        $this->eventTypeEnum = $eventTypeEnum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}