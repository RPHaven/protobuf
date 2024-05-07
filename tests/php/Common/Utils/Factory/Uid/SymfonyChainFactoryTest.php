<?php

declare(strict_types=1);

namespace Tests\Unit\Common\Utils\Factory\Uid;


use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use Rphaven\Common\Utils\Factory\Uid\ChainFactoryFactoryGrpc;
use Rphaven\Common\V1\Uid;
use Rphaven\Common\V1\UidType;
use Symfony\Component\Uid\Ulid;

final class SymfonyChainFactoryTest extends TestCase
{
    use ProphecyTrait;
    public function testItReturnsAnAbstractUid(): void
    {
        $ulid = Ulid::fromString(Ulid::generate());

        $chainFactory = ChainFactoryFactoryGrpc::init();

        $uid = new Uid([
            'type' => UidType::UID_TYPE_ULID,
            'rfc4122' => $ulid->toRfc4122(),
        ]);

        $this->assertTrue($ulid->equals($chainFactory->fromGrpc($uid)));
    }
}
