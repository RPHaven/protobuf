<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/tokens_not_issued.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class TokensNotIssued
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Gsts\V1\GPBMetadata\TokenIssueTransaction::initOnce();
        \Rphaven\Common\V1\GPBMetadata\Error::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xFD\x02\x0A'rphaven/gsts/v1/tokens_not_issued.proto\x12\x0Frphaven.gsts.v1\x1A\x1Drphaven/common/v1/error.proto\"\x8D\x01\x0A\x0FTokensNotIssued\x12H\x0A\x0Btransaction\x18\x01 \x01(\x0B2&.rphaven.gsts.v1.TokenIssueTransactionR\x0Btransaction\x120\x0A\x06errors\x18\x02 \x03(\x0B2\x18.rphaven.common.v1.ErrorR\x06errorsB\x89\x01\x0A\x13com.rphaven.gsts.v1B\x14TokensNotIssuedProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

