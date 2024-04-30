<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsts/v1/member_sub.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.TokensConsumed</code>
 */
class TokensConsumed extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.TokenTransaction transaction = 1 [json_name = "transaction"];</code>
     */
    protected $transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Gsts\V1\TokenTransaction $transaction
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\MemberSub::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.TokenTransaction transaction = 1 [json_name = "transaction"];</code>
     * @return \Rphaven\Gsts\V1\TokenTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.TokenTransaction transaction = 1 [json_name = "transaction"];</code>
     * @param \Rphaven\Gsts\V1\TokenTransaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\TokenTransaction::class);
        $this->transaction = $var;

        return $this;
    }

}

