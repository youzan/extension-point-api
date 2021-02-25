<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2021-02-24 17:14:34.0
 */
class ExtMpAccountInfoDTO implements \JsonSerializable {

    /**
     * 公众号二维码
     * @var string
     */
    private $qrCode;



    /**
     * @return string
     */
    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    /**
     * @param string $qrCode
     */
    public function setQrCode(?string $qrCode): void
    {
        $this->qrCode = $qrCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}