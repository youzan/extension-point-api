<?php
/**
 * Created by IntelliJ IDEA.
 * User: allen
 * Date: 2019-02-27
 * Time: 18:16
 */

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Util\DefaultJsonSerializeUtil;

class BizTestResponse implements \JsonSerializable
{

    use DefaultJsonSerializeUtil;

    /**
     * The request id
     *
     * @var int
     */
    private $requestId;

    /**
     * The request content
     *
     * @var string
     */
    private $content;

    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     */
    public function setRequestId(int $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

}