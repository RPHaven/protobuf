<?php

declare(strict_types=1);

namespace Tests\Unit\Common\Utils\Factory\Uid\SymfonyUid;

use PHPUnit\Framework\TestCase;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\UuidFactoryGrpc;
use Rphaven\Common\V1\Uid;
use Rphaven\Common\V1\UidType;
use Symfony\Component\Uid\Uuid;

final class UuidFactoryTest extends TestCase
{
    public function testItReturnsAUuidFromBinary(): void
    {
        $v6 = Uuid::v6();
        $uid = new Uid([
            'binary' => $v6->toBinary(),
            'type' => UidType::UID_TYPE_UUID,
        ]);

        $uidFactory = new UuidFactoryGrpc();
        $uuid = $uidFactory->fromGrpc($uid);

        $this->assertTrue($v6->equals($uuid));
    }

    public function testItReturnsAUuidFromAString(): void
    {
        $v6 = Uuid::v6();
        $uid = new Uid([
            'rfc4122' => $v6->toRfc4122(),
            'type' => UidType::UID_TYPE_UUID,
        ]);

        $uidFactory = new UuidFactoryGrpc();
        $uuid = $uidFactory->fromGrpc($uid);
        $this->assertTrue($v6->equals($uuid));
    }
}