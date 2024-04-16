<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsts/v1/token.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp issued = 2 [json_name = "issued"];</code>
     */
    protected $issued = null;
    /**
     * Generated from protobuf field <code>sint32 issue_number = 3 [json_name = "issueNumber"];</code>
     */
    protected $issue_number = 0;
    /**
     * Generated from protobuf field <code>bytes member = 4 [json_name = "member"];</code>
     */
    protected $member = '';
    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Status status = 5 [json_name = "status"];</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>bytes signature = 6 [json_name = "signature"];</code>
     */
    protected $signature = '';
    /**
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consumed = 7 [json_name = "consumed"];</code>
     */
    protected $consumed = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Google\Protobuf\Timestamp $issued
     *     @type int $issue_number
     *     @type string $member
     *     @type int $status
     *     @type string $signature
     *     @type \Google\Protobuf\Timestamp $consumed
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp issued = 2 [json_name = "issued"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIssued()
    {
        return $this->issued;
    }

    public function hasIssued()
    {
        return isset($this->issued);
    }

    public function clearIssued()
    {
        unset($this->issued);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp issued = 2 [json_name = "issued"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIssued($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->issued = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint32 issue_number = 3 [json_name = "issueNumber"];</code>
     * @return int
     */
    public function getIssueNumber()
    {
        return $this->issue_number;
    }

    /**
     * Generated from protobuf field <code>sint32 issue_number = 3 [json_name = "issueNumber"];</code>
     * @param int $var
     * @return $this
     */
    public function setIssueNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->issue_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes member = 4 [json_name = "member"];</code>
     * @return string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Generated from protobuf field <code>bytes member = 4 [json_name = "member"];</code>
     * @param string $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkString($var, False);
        $this->member = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Status status = 5 [json_name = "status"];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Status status = 5 [json_name = "status"];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Rphaven\Gsts\V1\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes signature = 6 [json_name = "signature"];</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>bytes signature = 6 [json_name = "signature"];</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consumed = 7 [json_name = "consumed"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getConsumed()
    {
        return $this->consumed;
    }

    public function hasConsumed()
    {
        return isset($this->consumed);
    }

    public function clearConsumed()
    {
        unset($this->consumed);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consumed = 7 [json_name = "consumed"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setConsumed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->consumed = $var;

        return $this;
    }

}
