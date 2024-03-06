<?php

namespace Com\Youzan\Cloud\Extension\Param\AccessControlReq;



/**
 * 平台帐号信息
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class PlatformUserInfo implements \JsonSerializable {

    /**
     * 平台帐号唯一标识
     * @var string
     */
    private $platformUserId;

    /**
     * 平台帐号粉丝ID
     * @var int
     */
    private $platformFansId;

    /**
     * 平台类型
     * @var int
     */
    private $platformType;

    /**
     * 平台维度的头像
     * @var string
     */
    private $avatar;

    /**
     * 平台维度的昵称
     * @var string
     */
    private $nickName;



    /**
     * @return string
     */
    public function getPlatformUserId(): ?string
    {
        return $this->platformUserId;
    }

    /**
     * @param string $platformUserId
     */
    public function setPlatformUserId(?string $platformUserId): void
    {
        $this->platformUserId = $platformUserId;
    }

    /**
     * @return int
     */
    public function getPlatformFansId(): ?int
    {
        return $this->platformFansId;
    }

    /**
     * @param int $platformFansId
     */
    public function setPlatformFansId(?int $platformFansId): void
    {
        $this->platformFansId = $platformFansId;
    }

    /**
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * @param int $platformType
     */
    public function setPlatformType(?int $platformType): void
    {
        $this->platformType = $platformType;
    }

    /**
     * @return string
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * @param string $nickName
     */
    public function setNickName(?string $nickName): void
    {
        $this->nickName = $nickName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}