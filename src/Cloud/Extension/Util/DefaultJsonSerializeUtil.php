<?php

namespace Com\Youzan\Cloud\Extension\Util;

trait DefaultJsonSerializeUtil
{

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}