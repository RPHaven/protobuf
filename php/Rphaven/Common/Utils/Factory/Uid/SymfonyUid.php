<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid;

use Rphaven\Common\V1\Uid;
use Symfony\Component\Uid\AbstractUid;

interface SymfonyUid
{
    public function fromGrpc(Uid $uid): AbstractUid;

    public function toUid(AbstractUid $uid): Uid;

    public function supportsUid(Uid $uid): bool;

    public function supportsAbstractUid(AbstractUid $uid): bool;
}