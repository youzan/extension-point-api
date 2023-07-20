<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 *  
 * @author Baymax
 * @create Tue May 16 21:12:58 CST 2023
 */
class ExtOrderItemPriceChangeLog implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单商品id
     * @var int
     */
    private $itemId;

    /**
     *  
     * @var string
     */
    private $fieldName;

    /**
     *  
     * @var string
     */
    private $changeType;

    /**
     * 优惠前金额
     * @var int
     */
    private $oldValue;

    /**
     * 优惠后金额
     * @var int
     */
    private $newValue;

    /**
     *  
     * @var int
     */
    private $tag;

    /**
     *  
     * @var string
     */
    private $detail;

    /**
     *  
     * @var string
     */
    private $extra;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return string
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return string
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * @param string $changeType
     */
    public function setChangeType(?string $changeType): void
    {
        $this->changeType = $changeType;
    }

    /**
     * @return int
     */
    public function getOldValue(): ?int
    {
        return $this->oldValue;
    }

    /**
     * @param int $oldValue
     */
    public function setOldValue(?int $oldValue): void
    {
        $this->oldValue = $oldValue;
    }

    /**
     * @return int
     */
    public function getNewValue(): ?int
    {
        return $this->newValue;
    }

    /**
     * @param int $newValue
     */
    public function setNewValue(?int $newValue): void
    {
        $this->newValue = $newValue;
    }

    /**
     * @return int
     */
    public function getTag(): ?int
    {
        return $this->tag;
    }

    /**
     * @param int $tag
     */
    public function setTag(?int $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return string
     */
    public function getExtra(): ?string
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     */
    public function setExtra(?string $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}