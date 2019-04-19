<?php
/**
 * Created by IntelliJ IDEA.
 * User: allen
 * Date: 2019-02-27
 * Time: 18:34
 */

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Util\DefaultJsonSerializeUtil;
use stdClass;

class BizTestOutParam implements \JsonSerializable
{

    use DefaultJsonSerializeUtil;

    /**
     *
     * @var bool
     */
    private $success;

    /**
     *
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    private $message;

    /**
     *
     * @var stdClass
     */
    private $data;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return stdClass
     */
    public function getData(): stdClass
    {
        return $this->data;
    }

    /**
     * @param stdClass $data
     */
    public function setData(stdClass $data): void
    {
        $this->data = $data;
    }


}