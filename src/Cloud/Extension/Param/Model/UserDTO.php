<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class UserDTO implements \JsonSerializable {

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户手机号，非必传
     * @var string
     */
    private $mobile;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}