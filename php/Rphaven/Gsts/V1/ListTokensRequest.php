<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/list_tokens_request.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.ListTokensRequest</code>
 */
class ListTokensRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     */
    protected $correlation = null;
    /**
     * Generated from protobuf field <code>repeated .rphaven.gsts.v1.Wallet wallets = 2 [json_name = "wallets"];</code>
     */
    private $wallets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Common\V1\Correlation $correlation
     *     @type array<\Rphaven\Gsts\V1\Wallet>|\Google\Protobuf\Internal\RepeatedField $wallets
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\ListTokensRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     * @return \Rphaven\Common\V1\Correlation|null
     */
    public function getCorrelation()
    {
        return $this->correlation;
    }

    public function hasCorrelation()
    {
        return isset($this->correlation);
    }

    public function clearCorrelation()
    {
        unset($this->correlation);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     * @param \Rphaven\Common\V1\Correlation $var
     * @return $this
     */
    public function setCorrelation($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Common\V1\Correlation::class);
        $this->correlation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .rphaven.gsts.v1.Wallet wallets = 2 [json_name = "wallets"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWallets()
    {
        return $this->wallets;
    }

    /**
     * Generated from protobuf field <code>repeated .rphaven.gsts.v1.Wallet wallets = 2 [json_name = "wallets"];</code>
     * @param array<\Rphaven\Gsts\V1\Wallet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWallets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rphaven\Gsts\V1\Wallet::class);
        $this->wallets = $arr;

        return $this;
    }

}

