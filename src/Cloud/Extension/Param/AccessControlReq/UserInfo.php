<?php

namespace Com\Youzan\Cloud\Extension\Param\AccessControlReq;

use Com\Youzan\Cloud\Extension\Param\AccessControlReq\PlatformUserInfo;

/**
 * 登录的用户信息
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class UserInfo implements \JsonSerializable {

    /**
     * 用户ID
     * @var int
     */
    private $userId;

    /**
     * 国家码
     * @var string
     */
    private $countryCode;

    /**
     * 手机号
     * @var string
     */
    private $mobile;

    /**
     * 帐号维度的头像
     * @var string
     */
    private $avatar;

    /**
     * 帐号维度的昵称
     * @var string
     */
    private $nickname;

    /**
     * 平台帐号信息
     * @var PlatformUserInfo
     */
    private $platformUserInfo;



    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
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
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return PlatformUserInfo
     */
    public function getPlatformUserInfo(): ?PlatformUserInfo
    {
        return $this->platformUserInfo;
    }

    /**
     * @param PlatformUserInfo $platformUserInfo
     */
    public function setPlatformUserInfo(?PlatformUserInfo $platformUserInfo): void
    {
        $this->platformUserInfo = $platformUserInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}