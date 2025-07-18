<?php

namespace Com\Youzan\Cloud\Extension\Param\VoucherVerifyExtPointRequest;



/**
 * 三方券列表
 * @author Baymax
 * @create Wed Jun 18 16:56:28 CST 2025
 */
class ThirdVoucherIdentity implements \JsonSerializable {

    /**
     * 三方券id
     * @var int
     */
    private $id;

    /**
     * 优惠券核销码
     * @var string
     */
    private $verifyCode;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}