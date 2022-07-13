<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class PromotionSourceIdentity implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $appType;

    /**
     *  
     * @var string
     */
    private $sourceType;

    /**
     *  
     * @var string
     */
    private $promotionSourceId;

    /**
     *  
     * @var string
     */
    private $benefitSourceVoucher;



    /**
     * @return int
     */
    public function getAppType(): ?int
    {
        return $this->appType;
    }

    /**
     * @param int $appType
     */
    public function setAppType(?int $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     */
    public function setSourceType(?string $sourceType): void
    {
        $this->sourceType = $sourceType;
    }

    /**
     * @return string
     */
    public function getPromotionSourceId(): ?string
    {
        return $this->promotionSourceId;
    }

    /**
     * @param string $promotionSourceId
     */
    public function setPromotionSourceId(?string $promotionSourceId): void
    {
        $this->promotionSourceId = $promotionSourceId;
    }

    /**
     * @return string
     */
    public function getBenefitSourceVoucher(): ?string
    {
        return $this->benefitSourceVoucher;
    }

    /**
     * @param string $benefitSourceVoucher
     */
    public function setBenefitSourceVoucher(?string $benefitSourceVoucher): void
    {
        $this->benefitSourceVoucher = $benefitSourceVoucher;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}