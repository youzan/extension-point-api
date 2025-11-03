<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Jan 20 15:41:30 CST 2025
 */
class OpenUserVerifyExtPointRequest implements \JsonSerializable {

    /**
     * 三方用户id
     * @var string
     */
    private $openId;

    /**
     * 三方扩展信息
     * @var string
     */
    private $openExt;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * @param string $openId
     */
    public function setOpenId(?string $openId): void
    {
        $this->openId = $openId;
    }

    /**
     * @return string
     */
    public function getOpenExt(): ?string
    {
        return $this->openExt;
    }

    /**
     * @param string $openExt
     */
    public function setOpenExt(?string $openExt): void
    {
        $this->openExt = $openExt;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}