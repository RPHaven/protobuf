<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/token_list_errors.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.TokenListErrors</code>
 */
class TokenListErrors extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Wallet wallet = 1 [json_name = "wallet"];</code>
     */
    protected $wallet = null;
    /**
     * Generated from protobuf field <code>repeated .rphaven.common.v1.Error errors = 2 [json_name = "errors"];</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Gsts\V1\Wallet $wallet
     *     @type array<\Rphaven\Common\V1\Error>|\Google\Protobuf\Internal\RepeatedField $errors
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\TokenListErrors::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Wallet wallet = 1 [json_name = "wallet"];</code>
     * @return \Rphaven\Gsts\V1\Wallet|null
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    public function hasWallet()
    {
        return isset($this->wallet);
    }

    public function clearWallet()
    {
        unset($this->wallet);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Wallet wallet = 1 [json_name = "wallet"];</code>
     * @param \Rphaven\Gsts\V1\Wallet $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\Wallet::class);
        $this->wallet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .rphaven.common.v1.Error errors = 2 [json_name = "errors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Generated from protobuf field <code>repeated .rphaven.common.v1.Error errors = 2 [json_name = "errors"];</code>
     * @param array<\Rphaven\Common\V1\Error>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rphaven\Common\V1\Error::class);
        $this->errors = $arr;

        return $this;
    }

}

