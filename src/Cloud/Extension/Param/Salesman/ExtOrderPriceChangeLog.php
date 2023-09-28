<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 *   
 * @author Baymax
 * @create Thu Sep 14 17:32:55 CST 2023
 */
class ExtOrderPriceChangeLog implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $changeType;

    /**
     *  
     * @var string
     */
    private $fieldName;

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