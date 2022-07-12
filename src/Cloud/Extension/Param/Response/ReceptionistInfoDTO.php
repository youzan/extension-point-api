<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:40:52 CST 2022
 */
class ReceptionistInfoDTO implements \JsonSerializable {

    /**
     * 客服昵称
     * @var string
     */
    private $nickName;

    /**
     * 客服手机号
     * @var string
     */
    private $mobile;

    /**
     * 客服头像
     * @var string
     */
    private $avatar;



    /**
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * @param string $nickName
     */
    public function setNickName(?string $nickName): void
    {
        $this->nickName = $nickName;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}