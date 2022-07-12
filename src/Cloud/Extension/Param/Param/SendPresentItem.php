<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\PresentTemplate;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class SendPresentItem implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $presentId;

    /**
     *  
     * @var int
     */
    private $num;

    /**
     *  
     * @var PresentTemplate
     */
    private $present;

    /**
     *  
     * @var int
     */
    private $canSendNum;

    /**
     *  
     * @var bool
     */
    private $isAvailable;

    /**
     *  
     * @var string
     */
    private $invalidReasonCode;

    /**
     *  
     * @var string
     */
    private $invalidReasonDesc;

    /**
     *  
     * @var bool
     */
    private $isSelected;



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
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return PresentTemplate
     */
    public function getPresent(): ?PresentTemplate
    {
        return $this->present;
    }

    /**
     * @param PresentTemplate $present
     */
    public function setPresent(?PresentTemplate $present): void
    {
        $this->present = $present;
    }

    /**
     * @return int
     */
    public function getCanSendNum(): ?int
    {
        return $this->canSendNum;
    }

    /**
     * @param int $canSendNum
     */
    public function setCanSendNum(?int $canSendNum): void
    {
        $this->canSendNum = $canSendNum;
    }

    /**
     * @return bool
     */
    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    /**
     * @param bool $isAvailable
     */
    public function setIsAvailable(?bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return string
     */
    public function getInvalidReasonCode(): ?string
    {
        return $this->invalidReasonCode;
    }

    /**
     * @param string $invalidReasonCode
     */
    public function setInvalidReasonCode(?string $invalidReasonCode): void
    {
        $this->invalidReasonCode = $invalidReasonCode;
    }

    /**
     * @return string
     */
    public function getInvalidReasonDesc(): ?string
    {
        return $this->invalidReasonDesc;
    }

    /**
     * @param string $invalidReasonDesc
     */
    public function setInvalidReasonDesc(?string $invalidReasonDesc): void
    {
        $this->invalidReasonDesc = $invalidReasonDesc;
    }

    /**
     * @return bool
     */
    public function getIsSelected(): ?bool
    {
        return $this->isSelected;
    }

    /**
     * @param bool $isSelected
     */
    public function setIsSelected(?bool $isSelected): void
    {
        $this->isSelected = $isSelected;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}