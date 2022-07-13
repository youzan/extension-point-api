<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 会员卡权益列表
 * @author Baymax
 * @create Mon Mar 14 17:57:37 CST 2022
 */
class MemberCardRightsDTO implements \JsonSerializable {

    /**
     * 会员卡ID
     * @var string
     */
    private $cardId;

    /**
     * 会员卡名称
     * @var string
     */
    private $cardName;

    /**
     * 是否是非会员专享
     * @var bool
     */
    private $nonmemberOnly;

    /**
     * 卡状态，VALID:有效 OVERDUE:过期
     * @var string
     */
    private $cardStatus;



    /**
     * @return string
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     */
    public function setCardId(?string $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * @return string
     */
    public function getCardName(): ?string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(?string $cardName): void
    {
        $this->cardName = $cardName;
    }

    /**
     * @return bool
     */
    public function getNonmemberOnly(): ?bool
    {
        return $this->nonmemberOnly;
    }

    /**
     * @param bool $nonmemberOnly
     */
    public function setNonmemberOnly(?bool $nonmemberOnly): void
    {
        $this->nonmemberOnly = $nonmemberOnly;
    }

    /**
     * @return string
     */
    public function getCardStatus(): ?string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(?string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}