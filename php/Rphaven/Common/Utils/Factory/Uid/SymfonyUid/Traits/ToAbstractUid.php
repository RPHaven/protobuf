<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid\SymfonyUid\Traits;

use Rphaven\Common\Utils\Factory\Uid\Exception\UnhandledGrpcType;
use Rphaven\Common\V1\Uid;
use Symfony\Component\Uid\AbstractUid;

trait ToAbstractUid
{
    public function fromGrpc(Uid $uid): AbstractUid
    {
        if (!$this->supportsUid($uid)) {
            throw new UnhandledGrpcType($uid);
        }

        return $this->toAbstractUid($uid);
    }

    public function supportsUid(Uid $uid): bool
    {
        return ($this->uidType() === $uid->getType());
    }

    abstract private function toAbstractUid(Uid $uid): AbstractUid;
}