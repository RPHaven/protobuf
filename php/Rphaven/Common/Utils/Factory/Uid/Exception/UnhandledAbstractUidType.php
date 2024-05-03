<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid\Exception;

use InvalidArgumentException;
use Symfony\Component\Uid\AbstractUid;

final class UnhandledAbstractUidType extends InvalidArgumentException implements UidFactoryException
{
    public function __construct(public readonly AbstractUid $uid)
    {
        parent::__construct(sprintf(
            'Unable to convert UID of type %s to gRPC: %s',
            get_class($this->uid),
            $this->uid->toRfc4122(),
        ));
    }
}