<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/token_issue_transaction.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class TokenIssueTransaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Token::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Wallet::initOnce();
        \Rphaven\Common\V1\GPBMetadata\Uid::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x8F\x04\x0A-rphaven/gsts/v1/token_issue_transaction.proto\x12\x0Frphaven.gsts.v1\x1A\x1Brphaven/gsts/v1/token.proto\x1A\x1Crphaven/gsts/v1/wallet.proto\x1A\x1Brphaven/common/v1/uid.proto\"\xDA\x01\x0A\x15TokenIssueTransaction\x12&\x0A\x02id\x18\x01 \x01(\x0B2\x16.rphaven.common.v1.UidR\x02id\x128\x0A\x09timestamp\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampR\x09timestamp\x12/\x0A\x06wallet\x18\x03 \x01(\x0B2\x17.rphaven.gsts.v1.WalletR\x06wallet\x12.\x0A\x06tokens\x18\x04 \x03(\x0B2\x16.rphaven.gsts.v1.TokenR\x06tokensB\x8F\x01\x0A\x13com.rphaven.gsts.v1B\x1ATokenIssueTransactionProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

