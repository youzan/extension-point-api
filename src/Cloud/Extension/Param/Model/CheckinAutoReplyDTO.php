<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\CheckinAutoReplyDTO\CheckinLinkExtraParam;

/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckinAutoReplyDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $alias;

    /**
     * 
     * @var string
     */
    private $linkId;

    /**
     * 
     * @var string
     */
    private $linkTitle;

    /**
     * 
     * @var string
     */
    private $linkType;

    /**
     * 
     * @var string
     */
    private $linkUrl;

    /**
     * 
     * @var CheckinLinkExtraParam
     */
    private $checkinLinkExtra;



    /**
     * @return string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getLinkId(): ?string
    {
        return $this->linkId;
    }

    /**
     * @param string $linkId
     */
    public function setLinkId(?string $linkId): void
    {
        $this->linkId = $linkId;
    }

    /**
     * @return string
     */
    public function getLinkTitle(): ?string
    {
        return $this->linkTitle;
    }

    /**
     * @param string $linkTitle
     */
    public function setLinkTitle(?string $linkTitle): void
    {
        $this->linkTitle = $linkTitle;
    }

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
    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    /**
     * @param string $linkUrl
     */
    public function setLinkUrl(?string $linkUrl): void
    {
        $this->linkUrl = $linkUrl;
    }

    /**
     * @return CheckinLinkExtraParam
     */
    public function getCheckinLinkExtra(): ?CheckinLinkExtraParam
    {
        return $this->checkinLinkExtra;
    }

    /**
     * @param CheckinLinkExtraParam $checkinLinkExtra
     */
    public function setCheckinLinkExtra(?CheckinLinkExtraParam $checkinLinkExtra): void
    {
        $this->checkinLinkExtra = $checkinLinkExtra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}