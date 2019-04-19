<?php
/**
 * Created by IntelliJ IDEA.
 * User: allen
 * Date: 2019-02-27
 * Time: 15:18
 */

namespace Com\Youzan\Cloud\Extension\Param\Test;

class BizTestRequest
{

    /**
     * The request id
     *
     * @var int
     */
    private $requestId;

    /**
     * The request data
     *
     * @var BizTestData
     */
    private $data;

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
     * @return BizTestData
     */
    public function getData(): BizTestData
    {
        return $this->data;
    }

    /**
     * @param BizTestData $data
     */
    public function setData(BizTestData $data): void
    {
        $this->data = $data;
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}