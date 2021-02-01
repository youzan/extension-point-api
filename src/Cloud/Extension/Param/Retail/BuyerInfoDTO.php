<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 买家信息
 * @author Baymax
 * @create 2019-08-06 10:42:46.0
 */
class BuyerInfoDTO implements \JsonSerializable {

    /**
     * 买家ID
     * @var int
     */
    private $buyerId;

    /**
     * 买家名字
     * @var string
     */
    private $buyerName;

    /**
     * 买家手机号
     * @var string
     */
    private $buyerPhone;

    /**
     * 粉丝名称
     * @var string
     */
    private $fansNickname;

    /**
     * 买家留言
     * @var string
     */
    private $buyerRemark;

    /**
     * 是否是会员
     * @var bool
     */
    private $isMember;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerName(): ?string
    {
        return $this->buyerName;
    }

    /**
     * @param string $buyerName
     */
    public function setBuyerName(?string $buyerName): void
    {
        $this->buyerName = $buyerName;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(?string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return string
     */
    public function getFansNickname(): ?string
    {
        return $this->fansNickname;
    }

    /**
     * @param string $fansNickname
     */
    public function setFansNickname(?string $fansNickname): void
    {
        $this->fansNickname = $fansNickname;
    }

    /**
     * @return string
     */
    public function getBuyerRemark(): ?string
    {
        return $this->buyerRemark;
    }

    /**
     * @param string $buyerRemark
     */
    public function setBuyerRemark(?string $buyerRemark): void
    {
        $this->buyerRemark = $buyerRemark;
    }

    /**
     * @return bool
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    /**
     * @param bool $isMember
     */
    public function setIsMember(?bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}