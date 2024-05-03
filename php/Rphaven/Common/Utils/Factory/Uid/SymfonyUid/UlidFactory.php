<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid\SymfonyUid;

use Rphaven\Common\Utils\Factory\Uid\SymfonyUid;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits\ToAbstractUid;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits\ToUid;
use Rphaven\Common\V1\Uid;
use Rphaven\Common\V1\UidType;
use Symfony\Component\Uid\AbstractUid;
use Symfony\Component\Uid\Ulid;

final readonly class UlidFactory implements SymfonyUid
{
    use ToUid;
    use ToAbstractUid;


    #[\Override] public function supportsAbstractUid(AbstractUid $uid): bool
    {
        return $uid instanceof Ulid;
    }

    private function uidType(): int
    {
        return UidType::UID_TYPE_ULID;
    }

    private function toAbstractUid(Uid $uid): Ulid
    {
        return match (true) {
            $uid->hasBinary() => Ulid::fromBinary($uid->getBinary()),
            $uid->hasRfc4122() => Ulid::fromRfc4122($uid->getRfc4122()),
        };
    }
}