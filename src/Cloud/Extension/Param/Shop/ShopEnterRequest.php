<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;



/**
 * 
 * @author Baymax
 * @create 2020-08-11 14:49:48.0
 */
class ShopEnterRequest implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 会话id
     * @var string
     */
    private $sessionId;

    /**
     * 买家用户id
     * @var string
     */
    private $buyerId;

    /**
     * 来源渠道,小程序、H5
     * @var string
     */
    private $sourceType;

    /**
     * 进店url
     * @var string
     */
    private $url;

    /**
     * 微信unionid
     * @var int
     */
    private $unionid;

    /**
     * 业务来源
     * @var array
     */
    private $bizType;

    /**
     * 跳过会员归属进店规则店铺
     * @var bool
     */
    private $directEnterSign;



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
    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(string $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     */
    public function setSourceType(string $sourceType): void
    {
        $this->sourceType = $sourceType;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getUnionid(): int
    {
        return $this->unionid;
    }

    /**
     * @param int $unionid
     */
    public function setUnionid(int $unionid): void
    {
        $this->unionid = $unionid;
    }

    /**
     * @return array
     */
    public function getBizType(): array
    {
        return $this->bizType;
    }

    /**
     * @param array $bizType
     */
    public function setBizType(array $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return bool
     */
    public function getDirectEnterSign(): bool
    {
        return $this->directEnterSign;
    }

    /**
     * @param bool $directEnterSign
     */
    public function setDirectEnterSign(bool $directEnterSign): void
    {
        $this->directEnterSign = $directEnterSign;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}