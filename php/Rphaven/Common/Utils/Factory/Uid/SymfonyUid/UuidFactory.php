<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid\SymfonyUid;

use Rphaven\Common\Utils\Factory\Uid\SymfonyUid;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits\ToAbstractUid;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits\ToUid;
use Rphaven\Common\V1\Uid;
use Rphaven\Common\V1\UidType;
use Symfony\Component\Uid\AbstractUid;
use Symfony\Component\Uid\Uuid;

final readonly class UuidFactory implements SymfonyUid
{
    use ToUid;
    use ToAbstractUid;

    private function toAbstractUid(Uid $uid): AbstractUid
    {
        return match (true) {
            $uid->hasBinary() => Uuid::fromBinary($uid->getBinary()),
            $uid->hasRfc4122() => Uuid::fromRfc4122($uid->getRfc4122()),
        };
    }

    public function supportsAbstractUid(AbstractUid $uid): bool
    {
        return $uid instanceof Uuid;
    }

    private function uidType(): int
    {
       return UidType::UID_TYPE_UUID;
    }
}