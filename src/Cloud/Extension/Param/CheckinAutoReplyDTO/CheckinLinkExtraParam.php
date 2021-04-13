<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinAutoReplyDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckinLinkExtraParam implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $linkType;

    /**
     * 
     * @var string
     */
    private $myWeAppLink;

    /**
     * 
     * @var string
     */
    private $otherWeAppAppId;

    /**
     * 
     * @var string
     */
    private $otherWeAppLink;



    /**
     * @return string
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param string $linkType
     */
    public function setLinkType(?string $linkType): void
    {
        $this->linkType = $linkType;
    }

    /**
     * @return string
     */
    public function getMyWeAppLink(): ?string
    {
        return $this->myWeAppLink;
    }

    /**
     * @param string $myWeAppLink
     */
    public function setMyWeAppLink(?string $myWeAppLink): void
    {
        $this->myWeAppLink = $myWeAppLink;
    }

    /**
     * @return string
     */
    public function getOtherWeAppAppId(): ?string
    {
        return $this->otherWeAppAppId;
    }

    /**
     * @param string $otherWeAppAppId
     */
    public function setOtherWeAppAppId(?string $otherWeAppAppId): void
    {
        $this->otherWeAppAppId = $otherWeAppAppId;
    }

    /**
     * @return string
     */
    public function getOtherWeAppLink(): ?string
    {
        return $this->otherWeAppLink;
    }

    /**
     * @param string $otherWeAppLink
     */
    public function setOtherWeAppLink(?string $otherWeAppLink): void
    {
        $this->otherWeAppLink = $otherWeAppLink;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}