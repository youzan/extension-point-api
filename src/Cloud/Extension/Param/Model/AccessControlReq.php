<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\AccessControlReq\PlatformInfo;
use Com\Youzan\Cloud\Extension\Param\AccessControlReq\SessionId;
use Com\Youzan\Cloud\Extension\Param\AccessControlReq\UserInfo;

/**
 * 请求参数
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class AccessControlReq implements \JsonSerializable {

    /**
     * 访问的店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 访问的链接（微商城的地址）
     * @var string
     */
    private $resourceUrl;

    /**
     * 登录平台信息
     * @var PlatformInfo
     */
    private $platformInfo;

    /**
     * sessionId对象
     * @var SessionId
     */
    private $sessionId;

    /**
     * 登录的用户信息
     * @var UserInfo
     */
    private $userInfo;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getResourceUrl(): ?string
    {
        return $this->resourceUrl;
    }

    /**
     * @param string $resourceUrl
     */
    public function setResourceUrl(?string $resourceUrl): void
    {
        $this->resourceUrl = $resourceUrl;
    }

    /**
     * @return PlatformInfo
     */
    public function getPlatformInfo(): ?PlatformInfo
    {
        return $this->platformInfo;
    }

    /**
     * @param PlatformInfo $platformInfo
     */
    public function setPlatformInfo(?PlatformInfo $platformInfo): void
    {
        $this->platformInfo = $platformInfo;
    }

    /**
     * @return SessionId
     */
    public function getSessionId(): ?SessionId
    {
        return $this->sessionId;
    }

    /**
     * @param SessionId $sessionId
     */
    public function setSessionId(?SessionId $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return UserInfo
     */
    public function getUserInfo(): ?UserInfo
    {
        return $this->userInfo;
    }

    /**
     * @param UserInfo $userInfo
     */
    public function setUserInfo(?UserInfo $userInfo): void
    {
        $this->userInfo = $userInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}