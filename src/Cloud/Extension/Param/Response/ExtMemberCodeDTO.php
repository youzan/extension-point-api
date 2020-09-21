<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create Tue Aug 25 15:40:11 CST 2020
 */
class ExtMemberCodeDTO implements \JsonSerializable {

    /**
     * 条形码
     * @var string
     */
    private $barCode;

    /**
     * 二维码（需要将图片流转换为BASE64加密字符串）
     * @var string
     */
    private $qrCode;

    /**
     * 编码后的code
     * @var string
     */
    private $encodeCode;



    /**
     * @return string
     */
    public function getBarCode(): string
    {
        return $this->barCode;
    }

    /**
     * @param string $barCode
     */
    public function setBarCode(string $barCode): void
    {
        $this->barCode = $barCode;
    }

    /**
     * @return string
     */
    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    /**
     * @param string $qrCode
     */
    public function setQrCode(string $qrCode): void
    {
        $this->qrCode = $qrCode;
    }

    /**
     * @return string
     */
    public function getEncodeCode(): string
    {
        return $this->encodeCode;
    }

    /**
     * @param string $encodeCode
     */
    public function setEncodeCode(string $encodeCode): void
    {
        $this->encodeCode = $encodeCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}