<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/common/v1/uid.proto

namespace Rphaven\Common\V1\GPBMetadata;

class Uid
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x85\x02\x0A\x1Brphaven/common/v1/uid.proto\x12\x11rphaven.common.v1\"A\x0A\x03Uid\x12\x18\x0A\x06binary\x18\x01 \x01(\x0CH\x00R\x06binary\x12\x1A\x0A\x07rfc4122\x18\x02 \x01(\x09H\x00R\x07rfc4122B\x04\x0A\x02idB\x87\x01\x0A\x15com.rphaven.common.v1B\x08UidProtoP\x01\xA2\x02\x03RCX\xAA\x02\x11Rphaven.Common.V1\xCA\x02\x11Rphaven\\Common\\V1\xE2\x02\x1DRphaven\\Common\\V1\\GPBMetadata\xEA\x02\x13Rphaven::Common::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

