<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits;

use Rphaven\Common\Utils\Factory\Uid\Exception\UnhandledAbstractUidType;
use Rphaven\Common\V1\Uid;
use Symfony\Component\Uid\AbstractUid;

trait ToUid
{
    public function toUid(AbstractUid $uid): Uid
    {
        if (!$this->supportsAbstractUid($uid)) {
            throw new UnhandledAbstractUidType($uid);
        }

        return new Uid([
            'binary' => $uid->toBinary(),
            'type' => $this->uidType(),
        ]);
    }

    abstract public function supportsAbstractUid(AbstractUid $uid): bool;

    abstract private function uidType(): int;
}