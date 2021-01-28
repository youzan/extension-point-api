<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;

use Com\Youzan\Cloud\Extension\Param\Giftpack\GiftPackRightsDTO;

/**
 * 礼包集合（同充值礼包一样）
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class GiftPackInfoExtDTO implements \JsonSerializable {

    /**
     * 礼包ID
     * @var string
     */
    private $giftPackId;

    /**
     * 礼包版本
     * @var string
     */
    private $giftPackVersion;

    /**
     * 礼包名称
     * @var string
     */
    private $giftPackName;

    /**
     * 
     * @var GiftPackRightsDTO
     */
    private $giftPackRights;

    /**
     * 礼包是否可用
     * @var bool
     */
    private $available;

    /**
     * 不可用原因
     * @var string
     */
    private $unavailableReason;

    /**
     * 备注
     * @var string
     */
    private $remark;



    /**
     * @return string
     */
    public function getGiftPackId(): string
    {
        return $this->giftPackId;
    }

    /**
     * @param string $giftPackId
     */
    public function setGiftPackId(string $giftPackId): void
    {
        $this->giftPackId = $giftPackId;
    }

    /**
     * @return string
     */
    public function getGiftPackVersion(): string
    {
        return $this->giftPackVersion;
    }

    /**
     * @param string $giftPackVersion
     */
    public function setGiftPackVersion(string $giftPackVersion): void
    {
        $this->giftPackVersion = $giftPackVersion;
    }

    /**
     * @return string
     */
    public function getGiftPackName(): string
    {
        return $this->giftPackName;
    }

    /**
     * @param string $giftPackName
     */
    public function setGiftPackName(string $giftPackName): void
    {
        $this->giftPackName = $giftPackName;
    }

    /**
     * @return GiftPackRightsDTO
     */
    public function getGiftPackRights(): GiftPackRightsDTO
    {
        return $this->giftPackRights;
    }

    /**
     * @param GiftPackRightsDTO $giftPackRights
     */
    public function setGiftPackRights(GiftPackRightsDTO $giftPackRights): void
    {
        $this->giftPackRights = $giftPackRights;
    }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getUnavailableReason(): string
    {
        return $this->unavailableReason;
    }

    /**
     * @param string $unavailableReason
     */
    public function setUnavailableReason(string $unavailableReason): void
    {
        $this->unavailableReason = $unavailableReason;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}