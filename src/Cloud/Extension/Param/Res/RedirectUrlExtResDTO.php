<?php

namespace Com\Youzan\Cloud\Extension\Param\Res;



/**
 * 请求出参
 * @author Baymax
 * @create 2021-01-05 17:51:36.0
 */
class RedirectUrlExtResDTO implements \JsonSerializable {

    /**
     * 支付成功页跳转链接
     * @var string
     */
    private $webPageRedirectUrl;



    /**
     * @return string
     */
    public function getWebPageRedirectUrl(): string
    {
        return $this->webPageRedirectUrl;
    }

    /**
     * @param string $webPageRedirectUrl
     */
    public function setWebPageRedirectUrl(string $webPageRedirectUrl): void
    {
        $this->webPageRedirectUrl = $webPageRedirectUrl;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}