<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/meet.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class Meet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Common\V1\GPBMetadata\Uid::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\VenueMeet::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\VirtualMeet::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xB6\x03\x0A\x1Arphaven/gsts/v1/meet.proto\x12\x0Frphaven.gsts.v1\x1A rphaven/gsts/v1/venue_meet.proto\x1A\"rphaven/gsts/v1/virtual_meet.proto\"\xB8\x01\x0A\x04Meet\x12&\x0A\x02id\x18\x01 \x01(\x0B2\x16.rphaven.common.v1.UidR\x02id\x12\x12\x0A\x04name\x18\x02 \x01(\x09R\x04name\x122\x0A\x05venue\x18\x03 \x01(\x0B2\x1A.rphaven.gsts.v1.VenueMeetH\x00R\x05venue\x128\x0A\x07virtual\x18\x04 \x01(\x0B2\x1C.rphaven.gsts.v1.VirtualMeetH\x00R\x07virtualB\x06\x0A\x04meetB~\x0A\x13com.rphaven.gsts.v1B\x09MeetProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

