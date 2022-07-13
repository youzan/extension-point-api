<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:16:38 CST 2022
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