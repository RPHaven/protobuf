<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/issue_wallet_tokens_response.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class IssueWalletTokensResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Common\V1\GPBMetadata\Correlation::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\TokensIssued::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\TokensNotIssued::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x90\x04\x0A2rphaven/gsts/v1/issue_wallet_tokens_response.proto\x12\x0Frphaven.gsts.v1\x1A#rphaven/gsts/v1/tokens_issued.proto\x1A'rphaven/gsts/v1/tokens_not_issued.proto\"\xDC\x01\x0A\x19IssueWalletTokensResponse\x12@\x0A\x0Bcorrelation\x18\x01 \x01(\x0B2\x1E.rphaven.common.v1.CorrelationR\x0Bcorrelation\x129\x0A\x07success\x18\x02 \x01(\x0B2\x1D.rphaven.gsts.v1.TokensIssuedH\x00R\x07success\x128\x0A\x05error\x18\x03 \x01(\x0B2 .rphaven.gsts.v1.TokensNotIssuedH\x00R\x05errorB\x08\x0A\x06resultB\x93\x01\x0A\x13com.rphaven.gsts.v1B\x1EIssueWalletTokensResponseProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

