<?php

namespace Com\Youzan\Cloud\Extension\Param\Item;



/**
 * 
 * @author Baymax
 * @create 2019-08-02 10:08:13.0
 */
class ItemUpdateMsgDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 消息体
     * @var string
     */
    private $msg;

    /**
     * id
     * @var string
     */
    private $id;

    /**
     * 商品删除	ITEM_DELETE 部分售罄（多sku商品某sku售罄）	SOLD_OUT_PART 全部售罄	SOLD_OUT_ALL 售罄恢复	SOLD_OUT_REVERT 商品上架	ITEM_SALE_UP 商品下架	ITEM_SALE_DOWN 商品规格新增	SKU_CREATE 商品规格删除	SKU_DELETE 商品规格编辑	SKU_UPDATE   商品新增	ITEM_CREATE 商品编辑	ITEM_UPDATE
     * @var string
     */
    private $status;

    /**
     * 商品状态事件 ITEM_STATE 商品基础信息事件 ITEM_INFO 商品规格信息事件 ITEM_SKU_INFO
     * @var string
     */
    private $type;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): void
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}