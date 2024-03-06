<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 返回数据
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class AccessControlResp implements \JsonSerializable {

    /**
     * 是否需要授权，如true，则redirectUrl不能为空
     * @var bool
     */
    private $needAuthorize;

    /**
     * 重定向的地址，应包括授权回调的地址、及当前页面的地址
     * @var string
     */
    private $redirectUrl;

    /**
     * 是否允许不登录，默认false。如果用户未登录，返回allowNotLogin&#x3D;true and needAuthorize&#x3D;false，则允许用户不登录。
     * @var bool
     */
    private $allowNotLogin;



    /**
     * @return bool
     */
    public function getNeedAuthorize(): ?bool
    {
        return $this->needAuthorize;
    }

    /**
     * @param bool $needAuthorize
     */
    public function setNeedAuthorize(?bool $needAuthorize): void
    {
        $this->needAuthorize = $needAuthorize;
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl(?string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return bool
     */
    public function getAllowNotLogin(): ?bool
    {
        return $this->allowNotLogin;
    }

    /**
     * @param bool $allowNotLogin
     */
    public function setAllowNotLogin(?bool $allowNotLogin): void
    {
        $this->allowNotLogin = $allowNotLogin;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}