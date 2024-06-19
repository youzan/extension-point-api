<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\CoubuildTextDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildImageDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildVideoDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobulildLinkDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildMiniProgramDTO;

/**
 * 欢迎语内容
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class WelcomeMsgContentDTO implements \JsonSerializable {

    /**
     * 欢迎语内容素材类型。1-文本、2-图片、3-链接、4-小程序、5-视频
     * @var int
     */
    private $type;

    /**
     * 文本
     * @var CoubuildTextDTO
     */
    private $text;

    /**
     * 图片，图片大小不能超过2M，支持JPG,PNG格式。
     * @var CobuildImageDTO
     */
    private $image;

    /**
     * 视频，大小不能超过10MB，支持MP4格式。
     * @var CobuildVideoDTO
     */
    private $video;

    /**
     * 链接
     * @var CobulildLinkDTO
     */
    private $link;

    /**
     * 小程序，仅能发送在企业微信关联的小程序，详细查看：https://help.youzan.com/displaylist/detail_26_26-2-52503
     * @var CobuildMiniProgramDTO
     */
    private $miniProgram;



    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return CoubuildTextDTO
     */
    public function getText(): ?CoubuildTextDTO
    {
        return $this->text;
    }

    /**
     * @param CoubuildTextDTO $text
     */
    public function setText(?CoubuildTextDTO $text): void
    {
        $this->text = $text;
    }

    /**
     * @return CobuildImageDTO
     */
    public function getImage(): ?CobuildImageDTO
    {
        return $this->image;
    }

    /**
     * @param CobuildImageDTO $image
     */
    public function setImage(?CobuildImageDTO $image): void
    {
        $this->image = $image;
    }

    /**
     * @return CobuildVideoDTO
     */
    public function getVideo(): ?CobuildVideoDTO
    {
        return $this->video;
    }

    /**
     * @param CobuildVideoDTO $video
     */
    public function setVideo(?CobuildVideoDTO $video): void
    {
        $this->video = $video;
    }

    /**
     * @return CobulildLinkDTO
     */
    public function getLink(): ?CobulildLinkDTO
    {
        return $this->link;
    }

    /**
     * @param CobulildLinkDTO $link
     */
    public function setLink(?CobulildLinkDTO $link): void
    {
        $this->link = $link;
    }

    /**
     * @return CobuildMiniProgramDTO
     */
    public function getMiniProgram(): ?CobuildMiniProgramDTO
    {
        return $this->miniProgram;
    }

    /**
     * @param CobuildMiniProgramDTO $miniProgram
     */
    public function setMiniProgram(?CobuildMiniProgramDTO $miniProgram): void
    {
        $this->miniProgram = $miniProgram;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}