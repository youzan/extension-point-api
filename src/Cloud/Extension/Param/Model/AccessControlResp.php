<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 返回数据
 * @author Baymax
 * @create Tue Jul 12 17:59:21 CST 2022
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}