<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\WelcomeMsgContentDTO;

/**
 * 返回数据
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildWelcomeMsgRespDTO implements \JsonSerializable {

    /**
     * 欢迎语内容
     * @var array
     */
    private $contents;



    /**
     * @return array
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param array $contents
     */
    public function setContents(?array $contents): void
    {
        $this->contents = $contents;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}