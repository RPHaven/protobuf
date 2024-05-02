<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/common/v1/uid.proto

namespace Rphaven\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.common.v1.Uid</code>
 */
class Uid extends \Google\Protobuf\Internal\Message
{
    protected $id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $binary
     *     @type string $rfc4122
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Common\V1\GPBMetadata\Uid::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes binary = 1 [json_name = "binary"];</code>
     * @return string
     */
    public function getBinary()
    {
        return $this->readOneof(1);
    }

    public function hasBinary()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>bytes binary = 1 [json_name = "binary"];</code>
     * @param string $var
     * @return $this
     */
    public function setBinary($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rfc4122 = 2 [json_name = "rfc4122"];</code>
     * @return string
     */
    public function getRfc4122()
    {
        return $this->readOneof(2);
    }

    public function hasRfc4122()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string rfc4122 = 2 [json_name = "rfc4122"];</code>
     * @param string $var
     * @return $this
     */
    public function setRfc4122($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->whichOneof("id");
    }

}
