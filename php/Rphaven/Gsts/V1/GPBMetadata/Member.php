<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/member.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class Member
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Common\V1\GPBMetadata\Uid::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x9C\x02\x0A\x1Crphaven/gsts/v1/member.proto\x12\x0Frphaven.gsts.v1\"`\x0A\x06Member\x12&\x0A\x02id\x18\x01 \x01(\x0B2\x16.rphaven.common.v1.UidR\x02id\x12\x1A\x0A\x08username\x18\x02 \x01(\x09R\x08username\x12\x12\x0A\x04name\x18\x03 \x01(\x09R\x04nameB\x80\x01\x0A\x13com.rphaven.gsts.v1B\x0BMemberProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
