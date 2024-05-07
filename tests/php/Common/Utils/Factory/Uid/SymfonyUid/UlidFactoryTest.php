<?php

declare(strict_types=1);

namespace Tests\Unit\Common\Utils\Factory\Uid\SymfonyUid;

use PHPUnit\Framework\TestCase;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\UlidFactoryGrpc;
use Rphaven\Common\V1\Uid;
use Rphaven\Common\V1\UidType;
use Symfony\Component\Uid\Ulid;

final class UlidFactoryTest extends TestCase
{
    public function testItReturnsAUlidFromAString(): void
    {
        $rfc4122 = Ulid::fromString(Ulid::generate());
        $uid = new Uid([
            'rfc4122' => $rfc4122->toRfc4122(),
            'type' => UidType::UID_TYPE_ULID,
        ]);

        $uidFactory = new UlidFactoryGrpc();
        $ulid = $uidFactory->fromGrpc($uid);

        $this->assertTrue($rfc4122->equals($ulid));
    }

    public function testItReturnsAUlidFromBinary(): void
    {
        $rfc4122 = Ulid::fromString(Ulid::generate());
        $uid = new Uid([
            'binary' => $rfc4122->toBinary(),
            'type' => UidType::UID_TYPE_ULID,
        ]);

        $uidFactory = new UlidFactoryGrpc();
        $ulid = $uidFactory->fromGrpc($uid);

        $this->assertTrue($rfc4122->equals($ulid));
    }
}
