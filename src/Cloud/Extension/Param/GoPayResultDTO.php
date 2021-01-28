<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 去支付出参
 * @author Baymax
 * @create 2018-09-25 17:50:17.0
 */
class GoPayResultDTO implements \JsonSerializable {

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extension;

    /**
     * 收银台链接
     * @var string
     */
    private $cashDeskUrl;



    /**
     * @return stdClass
     */
    public function getExtension(): stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(stdClass $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getCashDeskUrl(): string
    {
        return $this->cashDeskUrl;
    }

    /**
     * @param string $cashDeskUrl
     */
    public function setCashDeskUrl(string $cashDeskUrl): void
    {
        $this->cashDeskUrl = $cashDeskUrl;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}