<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/list_tokens_response.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.ListTokensResponse</code>
 */
class ListTokensResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     */
    protected $correlation = null;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Common\V1\Correlation $correlation
     *     @type \Rphaven\Gsts\V1\WalletTokens $success
     *     @type \Rphaven\Gsts\V1\TokenListErrors $error
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\ListTokensResponse::initOnce();
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
     * Generated from protobuf field <code>.rphaven.gsts.v1.WalletTokens success = 2 [json_name = "success"];</code>
     * @return \Rphaven\Gsts\V1\WalletTokens|null
     */
    public function getSuccess()
    {
        return $this->readOneof(2);
    }

    public function hasSuccess()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.WalletTokens success = 2 [json_name = "success"];</code>
     * @param \Rphaven\Gsts\V1\WalletTokens $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\WalletTokens::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.TokenListErrors error = 3 [json_name = "error"];</code>
     * @return \Rphaven\Gsts\V1\TokenListErrors|null
     */
    public function getError()
    {
        return $this->readOneof(3);
    }

    public function hasError()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.TokenListErrors error = 3 [json_name = "error"];</code>
     * @param \Rphaven\Gsts\V1\TokenListErrors $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\TokenListErrors::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

